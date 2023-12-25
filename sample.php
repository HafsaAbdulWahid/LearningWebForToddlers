<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffeecc;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
        }

        h1 {
            color: #ff6600;
            text-align: center;
        }

        .kalma-card {
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 15px;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
        }

        .kalma-card:hover {
            transform: scale(1.05);
        }

        .modal-body {
            text-align: center;
        }

        .btn-primary {
            background-color: #ff6600;
            border-color: #ff6600;
        }

        .btn-primary:hover {
            background-color: #cc5500;
            border-color: #cc5500;
        }

        /* Define different colors for each card */
        .kalma-card:nth-child(odd) {
            background-color: #6cb2eb; /* Blue */
        }

        .kalma-card:nth-child(even) {
            background-color: #f58271; /* Red */
        }

        .kalma-card:nth-child(3n) {
            background-color: #90be6d; /* Green */
        }
    </style>
    <title>Islamic Learning for Toddlers - Level 3</title>
</head>
<body>

<div class="container mt-5">
    <h1>Level 3: 6 Kalmas</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card kalma-card" onclick="openKalma('Tayyab', 'KalmaTayyab.mp3', 'Tayyab Translation', 'Tayyab Urdu Translation')">
                <div class="card-body">
                    <h5 class="card-title">Kalma e Tayyab</h5>
                </div>
            </div>
        </div>

        <!-- Repeat similar card structures for other Kalmas -->

    </div>
</div>

<!-- Modal for Kalma details -->
<div class="modal fade" id="kalmaModal" tabindex="-1" role="dialog" aria-labelledby="kalmaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kalmaModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopAudio()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="kalmaDescription"></p>
                <audio controls id="kalmaAudio"></audio>
            </div>
        </div>
    </div>
</div>

<script>
    function openKalma(kalmaTitle, audioFileName, englishTranslation, urduTranslation) {
        // Set the modal title
        document.getElementById('kalmaModalLabel').innerText = `Kalma e ${kalmaTitle}`;

        // Set the modal description with translations
        document.getElementById('kalmaDescription').innerHTML = `<strong>English Translation:</strong> ${englishTranslation}<br><strong>Urdu Translation:</strong> ${urduTranslation}`;

        // Set the audio source for the corresponding Kalma
        document.getElementById('kalmaAudio').src = audioFileName;

        // Show the modal
        $('#kalmaModal').modal('show');
    }

    function stopAudio() {
        // Pause the audio when the modal is closed
        document.getElementById('kalmaAudio').pause();
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
