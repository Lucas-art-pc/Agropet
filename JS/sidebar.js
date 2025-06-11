const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');
        const mainContent = document.getElementById('mainContent');

        openBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
            mainContent.classList.add('ml-64');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            mainContent.classList.remove('ml-64');
        });