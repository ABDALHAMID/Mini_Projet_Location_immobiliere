<style>
    @import "https://fonts.googleapis.com/css?family=Monoton|Codystar:300";
    * {
      margin: 0;
      box-sizing: border-box;
    }
  .e404 {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .contaner {
  }
  .top {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .top h1 {
    font-size: 90px;
  }

  .glitch {
  position: relative;
  font-size: 90px;
  line-height: 100px;
  font-weight: bold;
  font-family: 'Monoton';
}

.glitch::before,
.glitch::after {
  content: attr(data-text);
  font-weight: bold;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.glitch::before {
  left: 2px;
  text-shadow: -1px 0 red;
  background: #f1f2f3;
  animation: glitch-anim-2 2s infinite linear alternate-reverse;
}

.glitch::after {
  clip: rect(20px, 400px, 30px, 0);
  left: -2px;
  text-shadow: -1px 0 blue;
  background: #f1f2f3;
  animation: glitch-anim 2s infinite linear alternate-reverse;
}

@keyframes glitch-anim {
  0% {
    clip: rect(10px, 400px, 15px, 0);
  }
  20% {
    clip: rect(400px, 400px, 41px, 0);
  }
  40% {
    clip: rect(25px, 400px, 26px, 0);
  }
  60% {
    clip: rect(10px, 400px, 15px, 0);
  }
  80% {
    clip: rect(26px, 400px, 29px, 0);
  }
  100% {
    clip: rect(40px, 400px, 45px, 0);
  }
}

@keyframes glitch-anim-2 {
  0% {
    clip: rect(30px, 400px, 40px, 0);
  }
  20% {
    clip: rect(26px, 400px, 28px, 0);
  }
  40% {
    clip: rect(15px, 400px, 100px, 0);
  }
  60% {
    clip: rect(40px, 400px, 45px, 0);
  }
  80% {
    clip: rect(10px, 400px, 18px, 0);
  }
  100% {
    clip: rect(40px, 400px, 50px, 0);
  }
}
.down{
    font-size: 20px;
    margin-top: 20px;
    text-align: center;
}
.down article{
    display: flex;
    justify-content: space-around;
    align-items: end;
}
.btn2 {
  position: relative;
  display: inline-block;
  padding: 15px 30px;
  border: 2px solid #2e2e2e;
  text-transform: uppercase;
  color: #2e2e2e;
  text-decoration: none;
  font-weight: 600;
  font-size: 20px;
  transition: 0.3s;
}

.btn2::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  width: calc(100% + 4px);
  height: calc(100% - -2px);
  background-color: #fefefe;
  transition: 0.3s ease-out;
  transform: scaleY(1);
}

.btn2::after {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  width: calc(100% + 4px);
  height: calc(100% - 50px);
  background-color: #fefefe;
  transition: 0.3s ease-out;
  transform: scaleY(1);
}

.btn2:hover::before {
  transform: translateY(-25px);
  height: 0;
}

.btn2:hover::after {
  transform: scaleX(0);
  transition-delay: 0.15s;
}

.btn2:hover {
  border: 2px solid #2e2e2e;
}

.btn2 span {
  position: relative;
  z-index: 3;
}

button {
  text-decoration: none;
  border: none;
  background-color: transparent;
}
</style>
<section class="e404">
  <div class="contaner">
    <div class="top">
      <div class="glitch" data-text="404">404</div>

      <div class="glitch" data-text="not found">not found</div>
    </div>

    <div class="down">
      <article>
        <p>
          Uh oh! Looks like you got lost. <br />Go back to the homepage!
        </p>
        <button>
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>" class="btn2"><span class="spn2">HOME</span></a>
          </button>
      </article>
    </div>
  </div>
</section>
