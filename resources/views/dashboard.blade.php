
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Builds My Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            color: #20243a;
        }

        .sidebar {
            position: fixed;
            width: 245px;
            height: 100vh;
            background: #171b35;
            color: white;
            padding: 28px 20px;
        }

        .brand {
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 45px;
            line-height: 1.5;
        }

        .brand span {
            color: #a78bfa;
        }

        .nav-link {
            display: block;
            color: #c6c9d8;
            padding: 14px;
            margin-bottom: 10px;
            border-radius: 8px;
            text-decoration: none;
        }

        .nav-link.active,
        .nav-link:hover {
            background: #30365c;
            color: white;
        }

        .main {
            margin-left: 245px;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
            gap: 15px;
        }

        .topbar h2 {
            font-size: 25px;
        }

        .profile {
            background: white;
            padding: 12px 18px;
            border-radius: 10px;
        }

        .welcome {
            background: linear-gradient(120deg, #5b45c6, #8973ed);
            color: white;
            padding: 38px;
            border-radius: 16px;
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 30px;
            margin-bottom: 12px;
        }

        .welcome p {
            color: #eeeaff;
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .create-btn {
            display: inline-block;
            background: white;
            color: #5742bd;
            padding: 14px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .section-title {
            margin-bottom: 20px;
            font-size: 21px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 35px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.04);
        }

        .card h3 {
            font-size: 15px;
            color: #777b8c;
            margin-bottom: 15px;
        }

        .card h2 {
            font-size: 29px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .project-icon {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .project-card h3 {
            color: #252943;
            margin-bottom: 10px;
        }

        .project-card p {
            color: #777b8c;
            line-height: 1.5;
            font-size: 14px;
        }

        .status {
            display: inline-block;
            background: #eeeaff;
            color: #6149c7;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            margin-top: 17px;
        }

        .profile {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logout-btn {
    background: #624bc8;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 7px;
    cursor: pointer;
    text-decoration: none;
    font-weight: bold;
}

.danger-zone {
    margin-top: 35px;
    border: 1px solid #fecaca;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
}

.delete-btn {
    margin-top: 15px;
    background: #dc2626;
    color: white;
    border: none;
    padding: 12px 18px;
    border-radius: 7px;
    cursor: pointer;
    font-weight: bold;
}



/* Delete confirmation popup */

.modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(15, 18, 40, 0.65);
    backdrop-filter: blur(5px);
    justify-content: center;
    align-items: center;
    z-index: 9999;
    padding: 20px;
}

.modal-overlay.show {
    display: flex;
}

.modal-box {
    background: white;
    width: 100%;
    max-width: 420px;
    padding: 35px;
    border-radius: 18px;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    animation: popupAnimation 0.25s ease;
}

@keyframes popupAnimation {
    from {
        opacity: 0;
        transform: translateY(20px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.warning-icon {
    width: 65px;
    height: 65px;
    background: #fee2e2;
    color: #dc2626;
    border-radius: 50%;
    font-size: 38px;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 20px;
}

.modal-box h2 {
    color: #20243a;
    margin-bottom: 12px;
    font-size: 23px;
}

.modal-box p {
    color: #777b8c;
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 28px;
}

.modal-buttons {
    display: flex;
    gap: 12px;
}

.cancel-btn,
.confirm-delete-btn {
    flex: 1;
    padding: 13px 10px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
}

.cancel-btn {
    background: #f1f2f6;
    color: #34384e;
}

.confirm-delete-btn {
    background: #dc2626;
    color: white;
}

.cancel-btn:hover {
    background: #e5e7eb;
}

.confirm-delete-btn:hover {
    background: #b91c1c;
}

.confirm-delete-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}


        @media(max-width: 800px) {
            .sidebar {
                position: static;
                width: 100%;
                height: auto;
            }

            .brand {
                margin-bottom: 15px;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .stats,
            .projects {
                grid-template-columns: 1fr;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .welcome {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<aside class="sidebar">
    <div class="brand">
        AI Builds <span>My Website</span>
    </div>

    <a href="{{ route('dashboard') }}" class="nav-link active">
        🏠 Dashboard
    </a>

    <a href="#projects" class="nav-link">
        🌐 My Websites
    </a>

    <a href="#create-website" class="nav-link">
        ➕ Create Website
    </a>

    <a href="#activity" class="nav-link">
        📋 Recent Activity
    </a>
</aside>

<main class="main">

    <header class="topbar">
        <h2>Dashboard</h2>
        <div class="profile">
    <span>👤 Welcome, {{ auth()->user()->name }}</span>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">
            Logout
        </button>
    </form>
</div>
    </header>

    <section class="welcome" id="create-website">
        <h1>Build Your Website with AI ✨</h1>

        <p>
            Tell us about your business, upload your documents
            and share your links. Our AI will help you create
            a professional business website.
        </p>

       <a href="{{ route('business.create') }}" class="create-btn">
    + Add Business Details
</a>
    </section>

    <h2 class="section-title">Your Overview</h2>

    <section class="stats">
        <div class="card">
            <h3>Total Websites</h3>
            <h2>{{ $businesses->count() }}</h2>
        </div>

        <div class="card">
            <h3>Published Websites</h3>
            <h2>0</h2>
        </div>

        <div class="card">
            <h3>Draft Websites</h3>
            <h2>0</h2>
        </div>
    </section>

    <section id="projects">
        <h2 class="section-title">Get Started</h2>

        <div class="projects">

           <div class="card project-card">
    <div class="project-icon">🏢</div>
    <h3>Add Business Details</h3>
    <p>
        Enter your business name, city, contact information
        and social media links.
    </p>

    <a href="{{ route('business.create') }}" class="create-btn"
       style="background:#624bc8;color:white;margin-top:15px">
        Add Business
    </a>
</div>
            <div class="card project-card">
                <div class="project-icon">📄</div>
                <h3>Upload Your Files</h3>
                <p>
                    Upload PDFs, price lists, business
                    documents and photos.
                </p>
                <span class="status">Coming in next step</span>
            </div>

            <div class="card project-card">
                <div class="project-icon">🤖</div>
                <h3>Generate with AI</h3>
                <p>
                    Let AI create your website using
                    verified business information.
                </p>
                <span class="status">Coming in next step</span>
            </div>

            <div class="card project-card">
                <div class="project-icon">🚀</div>
                <h3>Publish Website</h3>
                <p>
                    Edit your website and publish it
                    with a public URL.
                </p>
                <span class="status">Coming in next step</span>
            </div>

        </div>
    </section>

    <section style="margin-top:35px">
    <h2 class="section-title">My Business Profiles</h2>

    @forelse ($businesses as $business)
        <div class="card" style="margin-bottom:15px">
            <h3>{{ $business->name }}</h3>

            <p style="margin-top:10px;color:#777b8c">
                Category: {{ $business->category ?? 'Not specified' }}
            </p>

            <p style="margin-top:8px;color:#777b8c">
                City: {{ $business->city }}
            </p>

            <p style="margin-top:8px;color:#777b8c">
                Email: {{ $business->email ?? 'Not provided' }}
            </p>

            <p style="margin-top:8px;color:#777b8c">
                Phone: {{ $business->phone ?? 'Not provided' }}
            </p>
        </div>
    @empty
        <div class="card">
            <p style="color:#777b8c">
                No business profiles yet. Add your first business to get started.
            </p>
        </div>
    @endforelse
</section>

    <section id="activity" style="margin-top:35px">
        <h2 class="section-title">Recent Activity</h2>

        <div class="card">
            <p style="color:#777b8c">
                No activity yet. Create your first website
                to get started!
            </p>
        </div>
    </section>

    <section class="danger-zone">
    <h2 style="color:#dc2626;margin-bottom:12px;">
        Danger Zone
    </h2>

    <p style="color:#777b8c;line-height:1.6;">
        Deleting your account will permanently remove
        your account and all associated business profiles.
        This action cannot be undone.
    </p>

  
<form id="deleteAccountForm"
      action="{{ route('account.destroy') }}"
      method="POST">
    @csrf
    @method('DELETE')

    <button type="button"
            class="delete-btn"
            onclick="openDeleteModal()">
        🗑 Delete My Account
    </button>
</form>

<!-- Delete Confirmation Modal -->
<div class="modal-overlay" id="deleteModal">
    <div class="modal-box">

        <div class="warning-icon">!</div>

        <h2>Delete Account?</h2>

        <p>
            Are you sure you want to permanently delete your account?
            All your business profiles will also be deleted.
            This action cannot be undone.
        </p>

        <div class="modal-buttons">
            <button type="button"
                    class="cancel-btn"
                    onclick="closeDeleteModal()">
                Cancel
            </button>

            <button type="button"
                    class="confirm-delete-btn"
                    onclick="confirmAccountDelete()">
                Yes, Delete Account
            </button>
        </div>

    </div>
</div>

</section>

</main>
<script>

function openDeleteModal() {
    document.getElementById('deleteModal').classList.add('show');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.remove('show');
}

function confirmAccountDelete() {
    const button = document.querySelector('.confirm-delete-btn');

    button.disabled = true;
    button.textContent = 'Deleting...';

    document.getElementById('deleteAccountForm').submit();
}

// Close popup when clicking outside
document.getElementById('deleteModal').addEventListener('click', function(event) {
    if (event.target === this) {
        closeDeleteModal();
    }
});
    
    </script>

</body>
</html>
