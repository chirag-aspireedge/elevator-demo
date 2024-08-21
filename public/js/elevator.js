$(document).ready(function() {
    const elevators = [
        { id: 1, currentFloor: 0, moving: false, soundId: 'arrival-sound-1' },
        { id: 2, currentFloor: 0, moving: false, soundId: 'arrival-sound-2' },
        { id: 3, currentFloor: 0, moving: false, soundId: 'arrival-sound-3' },
        { id: 4, currentFloor: 0, moving: false, soundId: 'arrival-sound-4' },
        { id: 5, currentFloor: 0, moving: false, soundId: 'arrival-sound-5' }
    ];

    $('.button').click(function() {
        const floor = $(this).data('floor');
        const button = $(this);

        button.addClass('waiting').text('Waiting');

        const closestElevator = findClosestElevator(floor);

        if (closestElevator) {
            moveElevator(closestElevator, floor, button);
        }
    });

    function findClosestElevator(targetFloor) {
        let closestElevator = null;
        let minDistance = Infinity;

        elevators.forEach(elevator => {
            if (!elevator.moving) {
                const distance = Math.abs(elevator.currentFloor - targetFloor);
                if (distance < minDistance) {
                    minDistance = distance;
                    closestElevator = elevator;
                }
            }
        });

        return closestElevator;
    }

    function moveElevator(elevator, targetFloor, button) {
        elevator.moving = true;
        const elevatorElement = $(`.grid[data-elevator="${elevator.id}"] .elevator`);
        const timeElement = $(`.grid[data-elevator="${elevator.id}"] div:nth-child(${10 - targetFloor}) .time`);
        const distance = Math.abs(elevator.currentFloor - targetFloor);
        const duration = distance * 2000;

        timeElement.removeClass('hidden');

        elevatorElement.css('transition', `transform ${duration}ms linear`);
        elevatorElement.css('transform', `translateY(${targetFloor * -55}px)`);
        elevatorElement.addClass('waiting');

        const startTime = new Date().getTime();

        const interval = setInterval(function() {
            const elapsedTime = new Date().getTime() - startTime;
            const elapsedSeconds = Math.round(elapsedTime / 1000);
            timeElement.text(`${elapsedSeconds}s`);
        }, 1000);

        setTimeout(function() {
            clearInterval(interval);
            elevator.currentFloor = targetFloor;
            elevator.moving = false;
            elevatorElement.removeClass('waiting').addClass('arrived');
            button.removeClass('waiting').addClass('arrived').text('Arrived');

            playElevatorSound(elevator.soundId);

            setTimeout(function() {
                elevatorElement.removeClass('arrived');
                button.removeClass('arrived').text('Call');
                timeElement.text('0s');
                timeElement.addClass('hidden');
            }, 2000);
        }, duration);
    }

    function playElevatorSound(soundId) {
        var audio = document.querySelector(`#${soundId}`);

        audio.play().then(() => {
            console.log("Audio is playing");
        }).catch((error) => {
            console.error("Audio playback failed:", error);
        });
    }
});
