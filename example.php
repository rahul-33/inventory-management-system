<!DOCTYPE html>
<html>
<head>
    <title>Print Example</title>
    <script>
        function printContent() {
            // Hide elements not to be printed
            var elementsToHide = document.getElementsByClassName('no-print');
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
            }

            // Print the specific part
            window.print();

            // Restore the hidden elements after printing
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = '';
            }
        }
    </script>
    <style>
        .no-print {
            display: block;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>Print Example</h1>

    <!-- The specific part you want to print -->
    <div id="content">
        <p>This is the content you want to print.</p>
    </div>

    <div class="no-print">
        <!-- Button to trigger printing -->
        <button onclick="printContent()">Print</button>
    </div>
</body>
</html>
