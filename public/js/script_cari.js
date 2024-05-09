document.addEventListener('DOMContentLoaded', function() {
    feather.replace();

    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const keyword = document.getElementById('keywordInput').value;
        const location = document.getElementById('locationInput').value;
        // Perform your search operation here, maybe using AJAX to fetch data from your database
        // After fetching data, populate the searchResults div with the results
        // Example:
        const searchResultsDiv = document.getElementById('searchResults');
        searchResultsDiv.innerHTML = ''; // Clear previous search results
        const searchResult1 = document.createElement('div');
        searchResult1.classList.add('col-lg-4', 'col-sm-6');
        searchResult1.innerHTML = `
            <div class="category theme-shadow p-lg-5 p-4">
                <div class="iconbox">
                    <i data-feather="pen-tool"></i>
                </div>
                <h5 class="mt-4 mb-3">Result 1</h5>
            </div>
        `;
        searchResultsDiv.appendChild(searchResult1);
        // Repeat the above process for each search result
    });
});


