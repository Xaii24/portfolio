// scrambleEffect.js

function scrambleText(element, originalText) {
    let characters =
        'ABCDEFGHIJKLMNOPQRSTUdeadefesfe32434234235VWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
    let scrambleInterval = 100; // milliseconds
    let scrambleDuration = 3000; // total duration for the scrambling effect in ms
    let startTime = Date.now();

    function scramble() {
        let elapsedTime = Date.now() - startTime;
        if (elapsedTime < scrambleDuration) {
            // Randomly choose characters from the string
            let scrambled = '';
            for (let i = 0; i < originalText.length; i++) {
                if (Math.random() < 0.5) {
                    scrambled += characters.charAt(
                        Math.floor(Math.random() * characters.length),
                    );
                } else {
                    scrambled += originalText.charAt(i);
                }
            }
            element.textContent = scrambled;
            setTimeout(scramble, scrambleInterval);
        } else {
            // Final step: show the original text
            element.textContent = originalText;
        }
    }
    scramble();
}
