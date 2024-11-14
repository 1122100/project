<script src="{{ asset('adminBumbu/sidebar.js') }}"></script>
<script>
    // JavaScript to toggle the search input display
    const searchButton = document.getElementById('searchButton');
    const searchInputContainer = document.getElementById('searchInputContainer');
    const searchInput = document.getElementById('searchInput');

    searchButton.addEventListener('click', () => {
        // Toggle visibility of the search input
        searchInputContainer.classList.toggle('hidden');
        searchInput.focus(); // Focus on the input field when shown
    });

    // Optional: Hide the search input when clicking outside of it
    document.addEventListener('click', (event) => {
        if (!searchInputContainer.contains(event.target) && !searchButton.contains(event.target)) {
            searchInputContainer.classList.add('hidden');
        }
    });
</script>
@stack('scripts')
</body>
</html>
