<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevator Demo</title>
    <link rel="stylesheet" href="{{ asset('css/elevator.css') }}">
</head>
<body>
    <div class="container">
        <!-- Floor names -->
        <div class="floor-names">
            <div class="floor-name">9th</div>
            <div class="floor-name">8th</div>
            <div class="floor-name">7th</div>
            <div class="floor-name">6th</div>
            <div class="floor-name">5th</div>
            <div class="floor-name">4th</div>
            <div class="floor-name">3rd</div>
            <div class="floor-name">2nd</div>
            <div class="floor-name">1st</div>
            <div class="floor-name">Ground Floor</div>
        </div>

        <div class="elevator-container">
            <!-- Multiple Elevators -->
            <div class="grid" data-elevator="1">
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div><div class="elevator" style="transform: translateY(0px);"></div></div>
            </div>
            <div class="grid" data-elevator="2">
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div><div class="elevator" style="transform: translateY(0px);"></div></div>
            </div>
            <div class="grid" data-elevator="3">
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div><div class="elevator" style="transform: translateY(0px);"></div></div>
            </div>
            <div class="grid" data-elevator="4">
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div><div class="elevator" style="transform: translateY(0px);"></div></div>
            </div>
            <div class="grid" data-elevator="5">
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div></div>
                <div><div class="time hidden">0s</div><div class="elevator" style="transform: translateY(0px);"></div></div>
            </div>
        </div>

        <!-- Floor Wise Buttons -->
        <div class="buttons">
            <button class="button" data-floor="9">Call</button>
            <button class="button" data-floor="8">Call</button>
            <button class="button" data-floor="7">Call</button>
            <button class="button" data-floor="6">Call</button>
            <button class="button" data-floor="5">Call</button>
            <button class="button" data-floor="4">Call</button>
            <button class="button" data-floor="3">Call</button>
            <button class="button" data-floor="2">Call</button>
            <button class="button" data-floor="1">Call</button>
            <button class="button" data-floor="0">Call</button>
        </div>
    </div>

    <!-- Elevator Arrived Sounds -->
    <audio id="arrival-sound-1" preload="auto" controls style="display:none;">
        <source src="{{ asset('elevator-sound-1.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="arrival-sound-2" preload="auto" controls style="display:none;">
        <source src="{{ asset('elevator-sound-2.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="arrival-sound-3" preload="auto" controls style="display:none;">
        <source src="{{ asset('elevator-sound-3.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="arrival-sound-4" preload="auto" controls style="display:none;">
        <source src="{{ asset('elevator-sound-4.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="arrival-sound-5" preload="auto" controls style="display:none;">
        <source src="{{ asset('elevator-sound-5.mp3') }}" type="audio/mpeg">
    </audio>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Logic for elevator -->
    <script src="{{ asset('js/elevator.js') }}"></script>
</body>
</html>
