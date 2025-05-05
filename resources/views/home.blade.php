<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=385, initial-scale=1.0"> {{-- Forces mobile width --}}
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="This page is an invitation page from Milk Life to {{$invitee ? $invitee->name : ''}}">
</head>
    <style>
        @font-face {
            font-family: 'CalSans';
            src: url('{{ asset("fonts/CalSans-Regular.ttf") }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            margin: 0;
            font-family: 'CalSans', system-ui, sans-serif;
            background-color: #f9fafb;
            color: #111827;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        header {
            font-size: 1.25rem;
            font-weight: bold;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .hero-container {
            position: relative;
            max-width: 416px; /* match image width */
            margin: 0 auto;
            margin-top: -1px !important;
        }

        .hero-image {
            width: 100%;
            height: auto;
            display: block;
        }

        .hero-text {
            position: absolute;
            top: 0%; /* Adjust this to sit right below 'Dear..' in image */
            left: 12%;
            width: 300px;
            height: 80px;
            text-align: left;
            padding: 0 16px; /* padding for longer names on mobile */
            box-sizing: border-box;
            align-content: center;
        }

        .hero-text .name {
            font-size: clamp(20px, 6vw, 32px);
            font-weight: bold;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
            margin: 0;
            line-height: 1.1;
            word-break: break-word;
        }

        .hero-text-date {
            position: absolute;
            top: 14%; /* Adjust this to sit right below 'Dear..' in image */
            left: 12%;
            width: 300px;
            height: 80px;
            text-align: left;
            padding: 0 16px; /* padding for longer names on mobile */
            box-sizing: border-box;
            align-content: center;
        }

        .hero-text-date .date {
            font-size: clamp(16px, 6vw, 26px);
            font-weight: bold;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
            margin: 0;
            line-height: 1.1;
            word-break: break-word;
        }

        .hero-btn-slide-2 {
            position: absolute;
            top: 35.5%; /* Adjust this to sit right below 'Dear..' in image */
            left: 12%;
            width: 300px;
            text-align: left;
            padding: 0 16px; /* padding for longer names on mobile */
            box-sizing: border-box;
            align-content: center;
        }

        .hero-text-btm {
            position: absolute;
            top: 71.5%; /* Adjust this to sit right below 'Dear..' in image */
            left: 15%;
            width: 300px;
            height: 80px;
            text-align: left;
            padding: 0 16px; /* padding for longer names on mobile */
            box-sizing: border-box;
            align-content: center;
        }

        .maps-link {
            position: absolute;
            left:36%;
            top:34%;
            bottom: 190px; /* Adjust depending on exact position */
            transform: translateX(-50%);
            width: 190px;
            height: 36px;
            z-index: 10;
            text-decoration: none;
        }

        .hero-text-btm .people {
            font-size: clamp(20px, 6vw, 32px);
            font-weight: bold;
            color: #1f2e9a;
            margin: 0;
            line-height: 1.1;
            word-break: break-word;
        }

        .hero-btn-yes-slide-4 {
            position: absolute;
            top: 67.1%; /* Adjust this to sit right below 'Dear..' in image */
            left: 28%;
            text-align: left;
            padding: 0 16px; /* padding for longer names on mobile */
            box-sizing: border-box;
            align-content: center;
        }

        .btn-yes-link {
            position: absolute;
            transform: translateX(-50%);
            width: 105px;
            height: 36px;
            z-index: 10;
            text-decoration: none;
        }

        .hero-btn-no-slide-4 {
            position: absolute;
            top: 67.1%; /* Adjust this to sit right below 'Dear..' in image */
            left: 59%;
            text-align: left;
            padding: 0 16px; /* padding for longer names on mobile */
            box-sizing: border-box;
            align-content: center;
        }

        .btn-no-link {
            position: absolute;
            transform: translateX(-50%);
            width: 105px;
            height: 36px;
            z-index: 10;
            text-decoration: none;
        }

        .pointer {
            cursor: pointer;
        }
        .hidden {
            display: none !important;
        }

        .hero-btn-close-modal {
            position: absolute;
            top: 25.5%;
            left: 66%;
            padding: 0 16px;
            width: 40px;
            height: 30px;
            box-sizing: border-box;
            align-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="rsvp-modal" class="hidden" style="
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            ">
            <div style="
                padding: 1.5rem;
                border-radius: 12px;
                max-width: 320px;
                text-align: center;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            ">
                <img id="rsvp-image" src="" alt="Response Image" style="width: 100%; max-width: 260px; height: auto;" />
                <div class="hero-btn-close-modal pointer">
                </div>
            </div>
        </div>

        <main>
            <div class="hero-container">
                <img src="{{ asset('img/slide-1.jpg') }}" alt="Slide 1" class="hero-image">
            </div>
            <div class="hero-container">
                <img src="{{ asset('img/slide-2.jpg') }}" alt="Background" class="hero-image" />
                <div class="hero-text">
                    @if($invitee)
                    <p class="name">{{ $invitee->name ?? '' }}</p>
                    @endif
                </div>
                <div class="hero-text-date">
                    @if($invitee)
                    <p class="date">at {{ date_format(new DateTime($invitee->event_date), 'd M Y') ?? '' }}</p>
                    @endif
                </div>
                @if($invitee)
                <div class="hero-btn-slide-2">
                    <a href="https://www.google.com/maps/place/Subang,+West+Java"
                        class="maps-link"
                        target="_blank"
                        aria-label="Google Maps Link">
                    </a>
                </div>
                @endif
            </div>
            <div class="hero-container">
                <img src="{{ asset('img/slide-3.jpg') }}" alt="Slide 3" class="hero-image">
            </div>
            <div class="hero-container">
                <img src="{{ asset('img/slide-4.jpg') }}" alt="Slide 4" class="hero-image">
                @if($invitee)
                <div class="hero-text-btm">
                    <p class="people">{{$invitee->people}} People</p>
                </div>
                @endif
            </div>
            <div class="hero-container">
                @if($invitee && strtoupper($invitee->status) === 'PENDING')
                <img src="{{ asset('img/slide-5.jpg') }}" alt="Slide 5" class="hero-image" id="image-confirm">
                <div class="hero-btn-yes-slide-4" id="btn-yes">
                    <a href="#"
                        class="btn-yes-link btn-confirm pointer"
                        data-update="yes"
                        data-invitee="{{$invitee->id}}"
                        aria-label="Yes, Definitely Come!">
                    </a>
                </div>
                <div class="hero-btn-no-slide-4" id="btn-no">
                    <a href="#"
                        class="btn-no-link btn-confirm pointer"
                        data-update="no"
                        data-invitee="{{$invitee->id}}"
                        aria-label="Sorry, Can't Come.">
                    </a>
                </div>
                @else
                <img src="{{ asset('img/slide-5-submit.jpg') }}" alt="Response Image" class="hero-image">
                @endif
            </div>
        </main>
    </div>
    <audio id="bg-music" loop autoplay muted>
        <source src="{{asset('audio/audio.mp3')}}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let audioPlayer = document.getElementById('bg-music');
            let unmuted = false;

            // Function to try unmuting audio
            function tryUnmute() {
                console.log('User interaction detected');
                if (audioPlayer && !unmuted) {
                    audioPlayer.muted = false; // Unmute the audio
                    audioPlayer.play(); // Start playing after unmuting
                    unmuted = true;
                    console.log('Audio unmuted:', unmuted);
                }
            }

            // Add interaction listeners (click, scroll, or touchstart)
            function addInteractionListeners() {
                if (typeof window.addEventListener === 'function') {
                    ['click', 'scroll', 'touchstart'].forEach(event => {
                        window.addEventListener(event, tryUnmute, { once: true });
                    });
                }
            }

            // Ensure the audio is ready and wait for user interaction to unmute
            if (audioPlayer) {
                audioPlayer.addEventListener('canplaythrough', function() {
                    console.log('Audio is ready');
                    addInteractionListeners();
                });
            }

            // confirmation

            document.addEventListener('click', function () {
                const modal = document.getElementById('rsvp-modal');
                const image = document.getElementById('image-confirm');
                const btnYes = document.getElementById('btn-yes');
                const btnNo = document.getElementById('btn-no');

                if (!modal.classList.contains('hidden')) {
                    modal.classList.add('hidden');
                    btnYes.remove();
                    btnNo.remove();
                    image.src = '{{ asset("img/slide-5-submit.jpg") }}';
                }
            });

            document.querySelectorAll('.btn-confirm').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();

                    const response = this.dataset.update;
                    const invitee = this.dataset.invitee;

                    fetch('/invite/rsvp', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            response: response,
                            id: invitee
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            const imageSrc = response === 'yes'
                                ? '{{ asset("img/otp_yes.png") }}'
                                : '{{ asset("img/otp_no.png") }}';

                            document.getElementById('rsvp-image').src = imageSrc;
                            document.getElementById('rsvp-modal').classList.remove('hidden');
                        } else {
                            console.error('Something went wrong.');
                        }
                    })
                    .catch(err => {
                        alert('Server error.');
                    });
                });
            });

        });
    </script>
</body>
</html>
