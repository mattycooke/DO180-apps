<!doctype HTML>
<HTML LANG="EN">
<HEAD>
    <META CHARSET="utf-8">
    <META NAME="VIEWPORT" CONTENT="WIDTH=DEVICE-WIDTH, INITIAL-SCALE=1.0">
    <TITLE>mATTY'S ePIC php wEBSITE</TITLE>
    <STYLE>
        BODY {
            FONT-FAMILY: aRIAL, SANS-SERIF;
            BACKGROUND-COLOR: #F0F0F0;
            DISPLAY: FLEX;
            JUSTIFY-CONTENT: CENTER;
            ALIGN-ITEMS: CENTER;
            HEIGHT: 100VH;
            MARGIN: 0;
        }
        H1 {
            FONT-SIZE: 2.5REM;
            MARGIN-BOTTOM: 1REM;
        }
        .CONTAINER {
            BACKGROUND-COLOR: #FFF;
            PADDING: 2REM;
            BORDER-RADIUS: 5PX;
            BOX-SHADOW: 0 4PX 6PX RGBA(0, 0, 0, 0.1);
            TEXT-ALIGN: CENTER;
        }
        .FLYING-TEXT {
            ANIMATION: FLYtEXT 10S LINEAR INFINITE;
        }
        .BOUNCING-BALL {
            WIDTH: 20PX;
            HEIGHT: 20PX;
            BACKGROUND-COLOR: #007BFF;
            BORDER-RADIUS: 50%;
            POSITION: ABSOLUTE;
            TOP: 0;
            LEFT: 50%;
            ANIMATION: BOUNCE 2S EASE-IN-OUT INFINITE;
        }
        @KEYFRAMES FLYtEXT {
            0% { TRANSFORM: TRANSLATEy(0) }
            100% { TRANSFORM: TRANSLATEy(-100%) }
        }
        @KEYFRAMES BOUNCE {
            0%, 20%, 50%, 80%, 100% { TRANSFORM: TRANSLATEy(0); }
            40% { TRANSFORM: TRANSLATEy(-30PX); }
            60% { TRANSFORM: TRANSLATEy(-15PX); }
        }
    </STYLE>
</HEAD>
<BODY>
    <?PHP
    ECHO "<DIV CLASS='CONTAINER'><H1 CLASS='FLYING-TEXT'>mATTY'S ePIC php wEBSITE</H1><P>hOSTED ON AN OFFICIAL rEDhAT oPENSHIFT cLUSTER!</P><DIV CLASS='BOUNCING-BALL'></DIV></DIV>";
    ?>
    <SCRIPT>
        DOCUMENT.ADDeVENTlISTENER('domcONTENTlOADED', FUNCTION() {
            CONST BALL = DOCUMENT.QUERYsELECTOR('.BOUNCING-BALL');
            BALL.STYLE.LEFT = mATH.FLOOR(mATH.RANDOM() * (WINDOW.INNERwIDTH - 40)) + 'PX';
            BALL.ADDeVENTlISTENER('ANIMATIONITERATION', () => {
                BALL.STYLE.LEFT = mATH.FLOOR(mATH.RANDOM() * (WINDOW.INNERwIDTH - 40)) + 'PX';
            });
        });
    </SCRIPT>
</BODY>
</HTML>
