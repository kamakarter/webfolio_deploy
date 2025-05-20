console.log('Admin tabs script loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded');
    
    const tabLinks = document.querySelectorAll('.admin-navigation_link[data-tab]');
    const tabContents = document.querySelectorAll('.tab-content');
    
    console.log('Tab links found:', tabLinks.length);
    console.log('Tab contents found:', tabContents.length);

    function switchTab(tabId) {
        console.log('Switching to tab:', tabId);
        
        // Hide all tab contents
        tabContents.forEach(content => {
            content.style.display = 'none';
            content.classList.remove('active');
        });

        // Remove active class from all links
        tabLinks.forEach(link => {
            link.classList.remove('active');
        });

        // Show selected tab content
        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.style.display = 'block';
            selectedTab.classList.add('active');
            console.log('Tab content shown:', tabId);
        } else {
            console.log('Tab content not found:', tabId);
        }

        // Add active class to clicked link
        const activeLink = document.querySelector(`[data-tab="${tabId}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
            console.log('Active link updated');
        }
    }

    // Handle tab clicks
    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const tabId = link.getAttribute('data-tab');
            console.log('Tab clicked:', tabId);
            switchTab(tabId);
        });
    });

    // Set initial active tab
    const initialTab = window.location.hash.substring(1) || 'dashboard';
    console.log('Setting initial tab:', initialTab);
    switchTab(initialTab);
}); 