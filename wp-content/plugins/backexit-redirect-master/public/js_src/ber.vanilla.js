history.pushState({}, "", location.href);
history.pushState({}, "", location.href);

function ber_doit() {
    setTimeout(function () {
        location.href = ber_settings.redirectURL;
    }, 1);
}

if (ber_settings.events.back) {
    window.onpopstate = function () {
        ber_doit();
    };
}

if (ber_settings.events.exit_intent) {
    window.onload = function() {
        document.addEventListener('mouseleave', function(event) {
            if (event.clientY <= 0) {
                ber_doit();
            }
        });        
    }
}


