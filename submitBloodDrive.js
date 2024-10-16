document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form'); //form element selection

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Form submission event listener

        // Get form field values
        const eventName = document.querySelector('[name="event_name"]').value;
        const email = document.querySelector('[name="email"]').value;
        const startDate = document.querySelector('[name="s_date"]').value;
        const endDate = document.querySelector('[name="e_date"]').value;

        // Email Validation
        if (!validateEmail(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Date Validation
        if (new Date(startDate) >= new Date(endDate)) {
            alert('Start date must be before the end date.');
            return; 
        }

    });

    // Email validation function
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return emailPattern.test(email);
    }
    
});
