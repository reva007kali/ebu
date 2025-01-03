<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More Example</title>
    <style>
        .read-more-content {
            display: none; /* Hidden by default */
            transition: 300ms ease;
        }
        .read-more-btn {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        <span class="read-more-content">
            Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. 
        </span>
        <span class="read-more-btn" onclick="toggleReadMore(this)">Read More</span>
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        <span class="read-more-content">
            Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. 
        </span>
        <span class="read-more-btn" onclick="toggleReadMore(this)">Read More</span>
    </p>

    <script>
        function toggleReadMore(button) {
            const content = button.previousElementSibling; // The hidden content
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "inline"; // Show the hidden content
                button.textContent = "Read Less"; // Update button text
            } else {
                content.style.display = "none"; // Hide the content
                button.textContent = "Read More"; // Reset button text
            }
        }
    </script>
</body>
</html>
