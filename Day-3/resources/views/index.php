<?php
require './PhpController/0_ConnectionDB.php';
session_start();

// 1) CHECK AUTH
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

// 0) FETCH USERS DETAILS 
$username = '';
require './PhpController/9_FetchUsersDetails.php';

// 2) FETCH LIST OF ALL THE NAMES FROM DB
$players = [];
require './PhpController/13_ListOfIgnore.php';

// 3) SANITIZE INPUT 
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}
function isSafeInput($input) {
    return !preg_match('/<script|<\/script|onerror=|onload=|javascript:/i', $input);
}

// 4) PHP HANDLE AJAX REQUEST !
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    header('Content-Type: application/json');

    switch ($action) {
        case 'add_entry':
            require './PhpController/13_AddIgnore.php';
            break;

        case 'update_entry':
            require './PhpController/13_EditIgnore.php';
            break;

        case 'delete_entry':
            require './PhpController/13_DeleteIgnore.php'; 
            break;
            
        case 'search':
            $searchTerm = $_POST['search'] ?? '';
            $filteredEntries = [];

            if (!empty($searchTerm)) {
                foreach ($players as $entry) {
                    if (stripos($entry['name'], $searchTerm) !== false) {
                        $filteredEntries[] = $entry;
                    }
                }
            } else {
                $filteredEntries = $players;
            }

            echo json_encode([
                'success' => true,
                'entries' => $filteredEntries,
                'searchTerm' => $searchTerm
            ]);
            break;

        default:
            echo json_encode(['success' => false, 'error' => 'Internal Server Error.']);
    }

    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/duplicateNames.css">
    <link rel="stylesheet" href="./css/style.css">
    <style> 
        .heading_home:hover {
            cursor:pointer; 
        }

        .sort-dropdown-wrapper {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
            width:100%; 
        }

        .custom-dropdown {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
            width: 170px; 
        }

        .custom-dropdown:hover {
            border-color: #007bff;
            background-color: #eef6ff;
        }

        .custom-dropdown:focus {
            border-color: #007bff;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.4);
        }
    </style>
</head>
<body class="body">
    <?php include './views/0_Header.php'; ?>
    <div class="container_N">
        <div class="header_N">
            <h1 class="dup-name">Block Players</h1>
            <p style="color:black;">Add names to block or delete.</p>
        </div>
        
        <div class="content">
           <div class="add-button-wrapper" style="display: flex; justify-content: center; margin: 20px 0;">
                <button class="btn" onclick="openModal()" style="font-size: 22px; display: flex; align-items: center; gap: 10px;width:fit-content;color:white;background-color:DodgerBlue;">
                    <i class="fas fa-plus"></i> Add New Name
                </button>
            </div>

            <div class="sort-dropdown-wrapper">
                <select id="sortDropdown" class="custom-dropdown" onchange="sortPlayers()">
                    <option value="none">Sort by...</option>
                    <option value="asc">Sort by Name (A - Z)</option>
                    <option value="desc">Sort by Name (Z - A)</option>
                    <option value="men">Men First</option>
                    <option value="women">Women First</option>
                </select>
            </div>
            
            <div id="entries-container_N">
                <?php if (empty($players)): ?>
                <div class="empty-state">
                    <h3>No entries yet</h3>
                    <p>Click the "Add New Name" button to create entry</p>
                </div>
                <?php else: ?>
                    <ul class="entries-list">
                    <?php foreach ($players as $entry): ?>
                        <li class="entry-item">
                            <div class="entry-names" style="">
                                <span style="padding-right: 3px;"><strong><?= htmlspecialchars($entry['name']) ?></strong></span>
                                <span style="color: grey;"><small><?= $entry['gender'] === 'M' ? 'Men' : 'Women' ?></small></span>
                            </div>
                            <div class="entry-actions">
                                <button class="btn btn-view" onclick='editEntry(<?= json_encode($entry) ?>)'>Edit</button>
                                <button class="btn btn-delete" onclick='deleteEntry(<?= $entry['id'] ?>)'>Delete</button>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modal-title" style="color:black;">Add New Name</h2>
                <button class="close-btn" onclick="closeModal()" style="color:black;">x</button>
            </div>
            <div class="modal-body">
                <div id="name-container">
                    <input type="text" id="nameInput" class="name-input" placeholder="Enter name..." required>
                </div>
                <div class="gender-selection" style="margin-top: 15px; display: flex; ">
                    <label style="color:black; margin-right: 15px;">Gender:</label>
                    <label style="color:black; margin-right: 10px;">
                        <input type="radio" name="gender" value="M" checked> Male
                    </label>
                    <label style="color:black;">
                        <input type="radio" name="gender" value="F"> Female
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="confirm-btn" onclick="saveEntry()">Confirm</button>
            </div>
        </div>
    </div>
    <!-- Loader -->
    <?php include 'views/5_Loading.php'; ?>

    <!-- SCRIPT -->
    <script>
        let players = <?= json_encode($players) ?>;
        let isEditMode = false;
        let editingEntryId = null;

        function openModal() {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('modal-title').textContent = 'Add New Name';
            document.getElementById('nameInput').value = '';
            document.querySelector('input[name="gender"][value="M"]').checked = true;
            isEditMode = false;
            editingEntryId = null;
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function editEntry(entry) {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('modal-title').textContent = 'Edit Name';
            document.getElementById('nameInput').value = entry.name;
            document.querySelector(`input[name="gender"][value="${entry.gender}"]`).checked = true;
            isEditMode = true;
            editingEntryId = entry.id;
        }

        function saveEntry() {
            const nameInput = document.getElementById('nameInput').value.trim();
            const genderInput = document.querySelector('input[name="gender"]:checked').value;
            
            if (!nameInput) {
                alert('Please enter a name');
                return;
            }

            const formData = new FormData();
            formData.append('action', isEditMode ? 'update_entry' : 'add_entry');
            formData.append('name', nameInput);
            formData.append('gender', genderInput);
            
            if (isEditMode) {
                formData.append('id', editingEntryId);
            }

            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    closeModal();
                    location.reload();
                } else {
                    alert(data.error || 'An error occurred');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving the entry');
            });
        }

        function deleteEntry(id) {
            if (confirm('Are you sure you want to delete this entry?')) {
                const formData = new FormData();
                formData.append('action', 'delete_entry');
                formData.append('id', id);

                fetch('', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert(data.error || 'An error occurred');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while deleting the entry');
                });
            }
        }

        function sortPlayers() {
            const sortType = document.getElementById('sortDropdown').value;
            let sorted = [...players];

            switch (sortType) {
                case 'asc':
                    sorted.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'desc':
                    sorted.sort((a, b) => b.name.localeCompare(a.name));
                    break;
                case 'men':
                    sorted.sort((a, b) => {
                        if (a.gender === 'M' && b.gender !== 'M') return -1;
                        if (a.gender !== 'M' && b.gender === 'M') return 1;
                        return a.name.localeCompare(b.name);
                    });
                    break;
                case 'women':
                    sorted.sort((a, b) => {
                        if (a.gender === 'F' && b.gender !== 'F') return -1;
                        if (a.gender !== 'F' && b.gender === 'F') return 1;
                        return a.name.localeCompare(b.name);
                    });
                    break;
                default:
                    // No sorting or original order
                    break;
            }

            renderPlayerList(sorted);
        }

        function renderPlayerList(playersToRender) {
            const container = document.getElementById('entries-container_N');
            
            if (playersToRender.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <h3>No entries yet</h3>
                        <p>Click the "Add New Name" button to create entry</p>
                    </div>
                `;
                return;
            }

            let html = '<ul class="entries-list">';
            
            playersToRender.forEach(entry => {
                html += `
                    <li class="entry-item">
                        <div class="entry-names" style="">
                            <span style="padding-right: 3px;"><strong>${escapeHtml(entry.name)}</strong></span>
                            <span style="color: grey;"><small>${entry.gender === 'M' ? 'Men' : 'Women'}</small></span>
                        </div>
                        <div class="entry-actions">
                            <button class="btn btn-view" onclick='editEntry(${JSON.stringify(entry)})'>Edit</button>
                            <button class="btn btn-delete" onclick='deleteEntry(${entry.id})'>Delete</button>
                        </div>
                    </li>
                `;
            });

            html += '</ul>';
            container.innerHTML = html;
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>