<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        :root {
            --primary: #5b21b6;
            --bg-light: #f8fafc;
            --bg-dark: #1e293b;
            --text-light: #1e293b;
            --text-dark: #f8fafc;
            --accent: #6366f1;
        }

        body {
            background: var(--bg-light);
            min-height: 100vh;
            color: var(--text-light);
            font-family: 'Inter', Arial, sans-serif;
            margin: 0;
            transition: background 0.2s, color 0.2s;
        }

        body.dark {
            background: var(--bg-dark);
            color: var(--text-dark);
        }

        .profile-open {
            max-width: 460px;
            margin: 72px auto 0 auto;
            text-align: center;
            padding: 0 2vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.4rem;
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 5px solid var(--accent);
            object-fit: cover;
            background: #eee;
            margin-bottom: 0.4rem;
        }

        .username {
            font-size: 1.4rem;
            font-weight: 600;
            margin-top: 0.15rem;
            letter-spacing: .01em;
            word-break: break-all;
        }

        .email {
            color: #6366f1;
            font-size: 1.03rem;
            margin-bottom: 0.23rem;
            word-break: break-all;
        }

        .edit-btn {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 0.67rem 2.1rem;
            border-radius: 22px;
            font-size: 1.03rem;
            font-weight: 500;
            cursor: pointer;
            margin-top: 0.7rem;
            box-shadow: 0 2px 8px rgba(99, 102, 241, 0.03);
            transition: background 0.17s;
        }

        .edit-btn:hover {
            background: var(--primary);
        }

        .mode-toggle {
            position: absolute;
            top: 22px;
            right: 22px;
            background: none;
            border: none;
            font-size: 1.37rem;
            cursor: pointer;
            color: var(--accent);
            border-radius: 50%;
            z-index: 2;
            padding: 4px;
        }

        .mode-toggle:focus {
            outline: 2px solid var(--accent);
        }

        /* Modal stays the same as before */
        .modal-bg {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 30;
            background: rgba(70, 65, 100, 0.22);
            backdrop-filter: blur(2px);
            justify-content: center;
            align-items: center;
        }

        .modal-bg.active {
            display: flex;
        }

        .modal {
            background: #fff;
            padding: 2rem 1.8rem 1.5rem 1.8rem;
            border-radius: 21px;
            box-shadow: 0 6px 24px rgba(80, 60, 110, 0.12);
            max-width: 340px;
            width: 98vw;
            transition: background 0.2s, color 0.2s;
        }

        body.dark .modal {
            background: #334155;
            color: #f8fafc;
        }

        .modal h2 {
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.17rem;
        }

        .field {
            margin-bottom: 1.2rem;
        }

        .field label {
            display: block;
            font-size: 0.97rem;
            margin-bottom: 0.4rem;
            font-weight: 500;
        }

        .field input[type="text"],
        .field input[type="email"] {
            width: 100%;
            padding: 0.6rem 0.8rem;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: none;
            font-size: 1rem;
            transition: border 0.16s;
            color: inherit;
        }

        body.dark .field input[type="text"],
        body.dark .field input[type="email"] {
            border-color: #475569;
        }

        .field input[type="text"]:focus,
        .field input[type="email"]:focus {
            border-color: var(--accent);
            outline: none;
        }

        .field input[type="file"] {
            border: none;
            background: none;
            margin-top: 0.4rem;
        }

        .avatar-preview {
            display: block;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0.7rem auto 1rem auto;
        }

        .modal-btns {
            text-align: right;
            margin-top: 1rem;
        }

        .modal-btns button {
            padding: 0.56rem 1.5rem;
            border-radius: 20px;
            border: none;
            margin-left: 0.6rem;
            font-size: 0.98rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.18s;
        }

        .modal-btns .save-btn {
            background: var(--accent);
            color: #fff;
        }

        .modal-btns .save-btn:hover {
            background: var(--primary);
        }

        .modal-btns .cancel-btn {
            background: #e2e8f0;
            color: #333;
        }

        body.dark .modal-btns .cancel-btn {
            background: #475569;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 700px) {
            .profile-open {
                margin-top: 44px;
            }
        }

        @media (max-width: 480px) {
            .profile-open {
                padding: 0 3vw;
            }

            .modal {
                padding: 1.3rem 3vw;
            }
        }
    </style>
</head>

<body>
    <button class="mode-toggle" aria-label="Switch color mode" id="mode-toggle">🌙</button>
    <section class="profile-open">
        <img src="https://same-assets.com/placeholder-avatars/256/avatar-9.png" alt="Avatar" class="avatar" id="avatar-img">
        <div class="username" id="profile-username">your_username</div>
        <div class="email" id="profile-email">your@email.com</div>
        <button class="edit-btn" id="edit-btn">Edit</button>
    </section>
    <!-- Modal -->
    <div class="modal-bg" id="modal-bg">
        <div class="modal">
            <h2>Edit Profile</h2>
            <form id="edit-form" autocomplete="off">
                <div class="field" style="text-align:center;">
                    <img src="https://same-assets.com/placeholder-avatars/256/avatar-9.png" alt="Preview" class="avatar-preview" id="modal-avatar-preview">
                    <input type="file" id="avatar-input" accept="image/*">
                </div>
                <div class="field">
                    <label for="username-input">User Name</label>
                    <input type="text" id="username-input" required>
                </div>
                <div class="field">
                    <label for="email-input">Email</label>
                    <input type="email" id="email-input" required>
                </div>
                <div class="modal-btns">
                    <button type="button" class="cancel-btn" id="cancel-btn">Cancel</button>
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Demo profile data
        let profile = {
            avatar: "https://same-assets.com/placeholder-avatars/256/avatar-9.png",
            username: "your_username",
            email: "your@email.com"
        };
        // Elements
        const profileUsername = document.getElementById('profile-username');
        const profileEmail = document.getElementById('profile-email');
        const avatarImg = document.getElementById('avatar-img');
        const editBtn = document.getElementById('edit-btn');
        const modalBg = document.getElementById('modal-bg');
        const modalAvatarPreview = document.getElementById('modal-avatar-preview');
        const avatarInput = document.getElementById('avatar-input');
        const usernameInput = document.getElementById('username-input');
        const emailInput = document.getElementById('email-input');
        const cancelBtn = document.getElementById('cancel-btn');
        const editForm = document.getElementById('edit-form');
        const modeToggle = document.getElementById('mode-toggle');

        // Render profile
        function renderProfile() {
            profileUsername.textContent = profile.username;
            profileEmail.textContent = profile.email;
            avatarImg.src = profile.avatar;
            modalAvatarPreview.src = profile.avatar;
        }
        // Modal open
        editBtn.onclick = function() {
            usernameInput.value = profile.username;
            emailInput.value = profile.email;
            modalAvatarPreview.src = profile.avatar;
            avatarInput.value = "";
            modalBg.classList.add('active');
        };
        // Modal close
        cancelBtn.onclick = () => modalBg.classList.remove('active');
        modalBg.onclick = e => {
            if (e.target === modalBg) modalBg.classList.remove('active');
        }
        // Preview avatar in modal
        avatarInput.onchange = function(ev) {
            const file = ev.target.files && ev.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    modalAvatarPreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                modalAvatarPreview.src = profile.avatar;
            }
        };
        // Save profile changes
        editForm.onsubmit = function(e) {
            e.preventDefault();
            profile.username = usernameInput.value.trim();
            profile.email = emailInput.value.trim();
            const file = avatarInput.files && avatarInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(ev) {
                    profile.avatar = ev.target.result;
                    renderProfile();
                }
                reader.readAsDataURL(file);
            } else {
                renderProfile();
            }
            modalBg.classList.remove('active');
        };
        // Color mode toggle
        function setMode(mode) {
            if (mode === 'dark') {
                document.body.classList.add('dark');
                modeToggle.textContent = '🌞';
                localStorage.setItem('color-mode', 'dark');
            } else {
                document.body.classList.remove('dark');
                modeToggle.textContent = '🌙';
                localStorage.setItem('color-mode', 'light');
            }
        }
        modeToggle.onclick = function() {
            setMode(document.body.classList.contains('dark') ? 'light' : 'dark');
        };
        // On page load: set color mode
        (function() {
            let initMode = localStorage.getItem('color-mode');
            if (!initMode) initMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            setMode(initMode);
            renderProfile();
        })();
    </script>
</body>

</html>