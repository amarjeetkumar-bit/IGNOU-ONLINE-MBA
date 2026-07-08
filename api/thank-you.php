<?php
// Optional: greet the user by name if passed as ?name=...
$name = isset($_GET['name']) ? trim(htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8')) : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" sizes="32x32" />
    <title>Thank You | IGNOU Online MBA Admission 2026</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="Thank you for your enquiry. A counsellor will call you shortly.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700;9..144,900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #231436;
            --ink-2: #3a1f52;
            --maroon: #7a1e3a;
            --gold: #e0a03a;
            --gold-deep: #c07f1e;
            --parchment: #faf6ef;
            --slate: #544a5c;
            --line: #eadfd2;
            --ok: #1f7a52;
            --shadow: 0 30px 70px -30px rgba(35, 20, 54, .45);
        }

        * { box-sizing: border-box; margin: 0; padding: 0 }
        body {
            font-family: "Plus Jakarta Sans", system-ui, sans-serif;
            color: var(--ink);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 28px 18px;
            background:
                radial-gradient(900px 500px at 12% -10%, rgba(122, 30, 58, .16), transparent 60%),
                radial-gradient(800px 500px at 100% 0%, rgba(224, 160, 58, .18), transparent 55%),
                linear-gradient(180deg, #fbf8f2, #f3ede2);
        }

        h1, h2 { font-family: "Fraunces", serif; font-weight: 700; line-height: 1.1 }

        .card {
            position: relative;
            width: 100%;
            max-width: 560px;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 26px;
            padding: 48px 40px 40px;
            text-align: center;
            box-shadow: var(--shadow);
            overflow: hidden;
        }
        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 26px;
            padding: 1.5px;
            background: linear-gradient(160deg, var(--gold), transparent 45%);
            -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        /* animated success tick */
        .tick-wrap { width: 96px; height: 96px; margin: 0 auto 24px; position: relative }
        .tick-ring {
            position: absolute; inset: 0; border-radius: 50%;
            background: rgba(31, 122, 82, .12);
            animation: pulse 2.2s ease-out infinite;
        }
        .tick {
            position: relative; width: 96px; height: 96px; border-radius: 50%;
            background: linear-gradient(160deg, #24915f, var(--ok));
            display: grid; place-items: center; color: #fff;
            box-shadow: 0 14px 30px -12px rgba(31, 122, 82, .7);
        }
        .tick svg { width: 46px; height: 46px }
        .tick svg path {
            stroke-dasharray: 40; stroke-dashoffset: 40;
            animation: draw .5s .25s ease forwards;
        }
        @keyframes draw { to { stroke-dashoffset: 0 } }
        @keyframes pulse { 0% { transform: scale(1); opacity: .8 } 70% { transform: scale(1.5); opacity: 0 } 100% { opacity: 0 } }

        .eyebrow {
            font-family: "Plus Jakarta Sans"; font-weight: 700; font-size: 12px;
            letter-spacing: .18em; text-transform: uppercase; color: var(--maroon); margin-bottom: 10px;
        }
        .card h1 { font-size: clamp(30px, 5vw, 40px); margin-bottom: 12px }
        .card h1 span { color: var(--maroon) }
        .lede { color: var(--slate); font-size: 16px; max-width: 420px; margin: 0 auto 26px }

        .steps { display: grid; gap: 12px; text-align: left; margin: 0 auto 28px; max-width: 400px }
        .step { display: flex; gap: 12px; align-items: flex-start; font-size: 14.5px; color: var(--ink-2) }
        .step .n {
            flex: 0 0 auto; width: 26px; height: 26px; border-radius: 50%;
            background: var(--parchment); border: 1px solid var(--gold);
            color: var(--maroon); font-weight: 800; font-size: 13px;
            display: grid; place-items: center;
        }

        .btns { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap }
        .btn {
            display: inline-flex; align-items: center; gap: 8px; justify-content: center;
            font-weight: 700; font-size: 15px; border: none; cursor: pointer;
            padding: 13px 24px; border-radius: 999px; text-decoration: none; font-family: inherit;
            transition: transform .15s ease, box-shadow .2s ease, background .2s ease;
        }
        .btn-gold { background: linear-gradient(180deg, var(--gold), var(--gold-deep)); color: #3a2405; box-shadow: 0 10px 24px -12px rgba(192, 127, 30, .8) }
        .btn-gold:hover { transform: translateY(-2px) }
        .btn-wa { background: #25d366; color: #fff }
        .btn-wa:hover { transform: translateY(-2px) }
        .btn-outline { background: transparent; border: 1.5px solid var(--line); color: var(--ink) }
        .btn-outline:hover { border-color: var(--maroon); color: var(--maroon) }
        .btn svg { width: 17px; height: 17px }

        .note { margin-top: 22px; font-size: 12.5px; color: var(--slate) }
        .note a { color: var(--maroon); font-weight: 600; text-decoration: none }

        @media (max-width:480px) {
            .card { padding: 40px 24px 32px; border-radius: 22px }
            .btns .btn { width: 100% }
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="tick-wrap">
            <div class="tick-ring"></div>
            <div class="tick">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12.5 9.5 18 20 6.5" /></svg>
            </div>
        </div>

        <p class="eyebrow">Enquiry Received</p>
        <h1>Thank You<?php echo $name ? ', ' . $name : ''; ?>! <span>🎉</span></h1>
        <p class="lede">Your details have been submitted successfully. One of our admission counsellors will call you shortly to guide you through the next steps.</p>

        <div class="steps">
            <div class="step"><span class="n">1</span><span>Our counsellor reviews your enquiry and calls you back.</span></div>
            <div class="step"><span class="n">2</span><span>Get answers on fees, eligibility and specializations.</span></div>
            <div class="step"><span class="n">3</span><span>Complete your application and reserve your 2026 seat.</span></div>
        </div>

        <div class="btns">
            <a class="btn btn-wa" href="https://wa.me/910000000000" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.15-1.7-.85-2-.95-.26-.1-.45-.15-.64.15-.19.28-.73.94-.9 1.13-.16.19-.33.21-.61.07a8.2 8.2 0 0 1-2.4-1.48 9 9 0 0 1-1.67-2.07c-.17-.3 0-.46.13-.6.13-.13.28-.33.42-.5.14-.17.19-.29.28-.48.1-.19.05-.36-.02-.5-.07-.15-.64-1.54-.88-2.1-.23-.55-.46-.48-.64-.49h-.55c-.19 0-.5.07-.76.36-.26.28-1 .98-1 2.4 0 1.42 1.02 2.78 1.16 2.97.14.19 2.02 3.08 4.9 4.32.68.29 1.22.47 1.63.6.69.22 1.31.19 1.8.11.55-.08 1.7-.69 1.94-1.36.24-.67.24-1.24.17-1.36-.07-.12-.26-.19-.55-.33ZM12 2a10 10 0 0 0-8.5 15.28L2 22l4.84-1.27A10 10 0 1 0 12 2Z" /></svg>
                Chat on WhatsApp
            </a>
            <a class="btn btn-outline" href="index.php">Back to Home</a>
        </div>

        <p class="note">Need help now? Call us at <a href="tel:+910000000000">+91 00000 00000</a></p>
    </div>

    <!-- Optional: auto-redirect home after 15s. Uncomment to enable.
    <script>setTimeout(function(){ location.href = 'index.php'; }, 15000);</script>
    -->
</body>

</html>
