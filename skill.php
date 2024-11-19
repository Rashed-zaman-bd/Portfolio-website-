<?php

include 'header.php';

?>




 <div class="page-header animate__animated animate__zoomIn">
    <h2>Skills</h2>
    <div class="devider"></div>
        <p class="subtitle">what about my knowledge</p>
</div>

    <section class="color">

        <div class="skills-container">
            <div class="skill-container">
                <p>HTML5 & CSS3</p>
                <div class="percentage html-percentage" style="color: black; font-size: 12px;">90%</div>
                <div class="bar">
                    <span class="html"></span>
                </div>
            </div>

            <div class="skill-container">
                <p>Wordpress</p>
                <div class="percentage css-percentage" style="color: black; font-size: 12px;">80%</div>
                    <div class="bar">
                        <span class="css"></span>
                    </div>
            </div>

            <div class="skill-container">
                <p>JavaScript</p>
                <div class="percentage javascript-percentage" style="color: black; font-size: 12px;">75%</div>
                    <div class="bar">
                        <span class="javascript"></span>
                    </div>
            </div>

            <div class="skill-container">
                <p>React.JS</p>
                <div class="percentage react-percentage" style="color: black; font-size: 12px;">75%</div>
                <div class="bar">
                    <span class="react"></span>
                </div>
            </div>

            <div class="skill-container">
                <p>PHP</p>
                <div class="percentage node-percentage" style="color: black; font-size: 12px;">70%</div>
                <div class="bar">
                    <span class="php"></span>
                </div>
            </div>
        </div>

        <div class="skill-circle">
            <div class="container1">
                <div class="circular-progress" data-inner-circle-color="#fff" data-percentage="90"
                        data-progress-color="#a43f49" data-bg-color="black">
                    <div class="inner-circle"></div>
                    <p class="percentage1">0%</p>
                </div>
                    <p class="text1">Team Work</p>
            </div>

            <div class="container1">
                <div class="circular-progress" data-inner-circle-color="#fff" data-percentage="80"
                        data-progress-color="#a43f49" data-bg-color="black">
                    <div class="inner-circle"></div>
                    <p class="percentage1">0%</p>
                </div>
                        <p class="text1">Communication Skill</p>
            </div>

            <div class="container1">
                <div class="circular-progress" data-inner-circle-color="#fff" data-percentage="100"
                    data-progress-color="#a43f49" data-bg-color="black">
                    <div class="inner-circle"></div>
                    <p class="percentage1">0%</p>
                </div>
                    <p class="text1">Dedicated</p>
            </div>
        </div>

                

    </section>
<br><br><br>
    <div class="cont">
        <div class="download btn">
            <a href="contact.php" class="animet">Hire Me Click Here</a>
        </div>
    </div>

<?php

include 'footer.php';

?>

<script>
        //skill bar js coding

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                spans.forEach((span, index) => {
                    const percentage = percentages[index];
                    if (entry.isIntersecting) {
                        span.classList.add('animate');
                        percentage.classList.add('animate');
                    } else {
                        span.classList.remove('animate');
                        percentage.classList.remove('animate');
                    }
                });
            });
        });

        const skillContainer = document.querySelector('.skills-container');
        const spans = document.querySelectorAll('.bar span');
        const percentages = document.querySelectorAll('.percentage');
        observer.observe(skillContainer);

        function updatePercentagePositions() {
            const barWidth = document.querySelector('.bar').clientWidth;
            percentages.forEach(percentage => {
                const widthPercentage = parseFloat(percentage.textContent) / 100;
                percentage.style.left = `${barWidth * widthPercentage - 20.5}px`;
            });
        }

        updatePercentagePositions(); // Call initially


        //radical bar js coding

        const circularProgress = document.querySelectorAll(".circular-progress");

        Array.from(circularProgress).forEach((progressBar) => {
            const progressValue = progressBar.querySelector(".percentage1");
            const innerCircle = progressBar.querySelector(".inner-circle");
            let startValue = 0,
                endValue = Number(progressBar.getAttribute("data-percentage")),
                speed = 50,
                progressColor = progressBar.getAttribute("data-progress-color");

            const progress = setInterval(() => {
                startValue++;
                progressValue.textContent = `${startValue}%`;
                progressValue.style.color = `${progressColor}`;

                innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

                progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
                if (startValue === endValue) {
                    clearInterval(progress);
                }
            }, speed);
        });
    </script>

    <script src="../js/main.js"></script>