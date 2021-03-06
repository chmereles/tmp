$black: #202020;
$white: #fff;
$dark-grey: #808080;
$light-grey: #d9d9d9;
$purple: #B97CFC;
$pink: #F93B69;
$green: #B0E8E2;
$orange: #EB8B6E;

body {
  //background: radial-gradient(circle, $white , lighten($dark-grey, 40));
}

.container {
  max-width: 350px;
  max-height: 630px;
  overflow: hidden;
  margin: 30px auto 0;
  box-shadow: 0 0 40px lighten($black, 50);
  font-family: 'Open Sans', sans-serif;
}

.navbar {
  background: $purple;
  color: $white;
  padding: 1em 0.5em;
  
  a {
    color: $white;
    text-decoration: none;
    font-size: 1.3em;
    float: left;
  }
  
  span {
    font-size: 1.1em;
    font-weight: 300;
    display: block;
    text-align: center;
  }
}

.profile-pic {
  width: 30px;
  height: 30px;
  display: inline-block;
  float: right;
  position: relative;
  
  img {
    width: 100%;
    border-radius: 50%;
  }
}

.notification {
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  top: 2px;
  right: 2px;
  background: $pink;
}

.header {
  background: url(https://unsplash.it/1080/720?image=1044);
  background-size: cover;
  color: $white;
  position: relative;
}

.color-overlay {
  padding: 3em 2em;
  box-sizing: border-box;
  background: rgba(123, 94, 155, 0.5) ;
}

.actionbutton {
  position: absolute;
  background: $pink;
  width: 50px;
  height: 50px;
  font-size: 3em;
  font-weight: 300;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  bottom: -25px;
  right: 20px;
  box-shadow: 0 0 8px #202020;
}

.day-number {
  font-size: 4em;
  display: inline-block;
  margin-right: 15px;
}

.date-right {
  display: inline-block;
}

.day-name {
  font-size: 1.6em;
}

.month {
  text-transform: uppercase;
  font-weight: 300;
  font-size: 0.6em;
  letter-spacing: 2px;
  margin-top: 2px;
}

.timeline {
  
  ul {
    padding: 1em 0 0 2em;
    margin: 0;
    list-style: none;
    position: relative;
    
    &::before {
      content: ' ';
      height: 100%;
      width: 1px;
      background-color: $light-grey;
      position: absolute;
      top: 0;
      left: 2.5em;
      z-index: -1;
    }
  }
  
  li div{
    display: inline-block;
    margin: 1em 0;
    vertical-align: top;
  }
  
  .bullet {
    width: 1em;
    height: 1em;
    box-sizing: border-box;
    border-radius: 50%;
    background: $white;
    z-index: 1;
    margin-right: 1em;
    
    &.pink {
      border: 2px solid $pink;
    }
    
    &.green {
      border: 2px solid $green;
    }
    
    &.orange {
      border: 2px solid $orange;
    }
  }
  
  .time {
    width: 20%;
    font-size: 0.75em;
    padding-top: 0.25em;
  }
  
  .desc {
    width: 50%;
  }
  
  h3 {
    font-size: 0.9em;
    font-weight: 400;
    margin: 0;
  }
  
  h4 {
    margin: 0;
    font-size: 0.7em;
    font-weight: 400;
    color: $dark-grey;
  }
  
  .people img{
    width: 30px;
    height: 30px;
    border-radius: 50%;
  }
}

.credits, .video{
  position: absolute;
  bottom:10px;
  color: $dark-grey;
  font-size: 100%;
  text-decoration: underline;
}

.credits {
  left: 10px;
}

.video{
  right: 10px;
}


<div class="container">
  <div class="navbar">
    <a href="#">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    <div class="profile-pic">
      <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" alt="" />
      <div class="notification"></div>
    </div>
    <span>Timeline</span>
  </div>
  
  <div class="header">
    <div class="color-overlay">
      <div class="day-number">8</div>
      <div class="date-right">
        <div class="day-name">Monday</div>
        <div class="month">February 2015</div>
      </div>
    </div>
    <div class="actionbutton">+</div>
  </div>
  
  <div class="timeline">
    <ul>
      <li>
        <div class="bullet pink"></div>
        <div class="time">5pm</div>
        <div class="desc">
          <h3>New Icon</h3>
          <h4>Mobile App</h4>
        </div>
      </li>
      <li>
        <div class="bullet green"></div>
        <div class="time">3 - 4pm</div>
        <div class="desc">
          <h3>Design Stand Up</h3>
          <h4>Hangouts</h4>
          <div class="people">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/ashleyford/128.jpg" alt="" />
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kfriedson/128.jpg" alt="" />
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/mattsince87/128.jpg" alt="" />
          </div>
        </div>
      </li>
      <li>
        <div class="bullet orange"></div>
        <div class="time">12pm</div>
        <div class="desc">
          <h3>Lunch Break</h3>
        </div>
      </li>
      <li>
        <div class="bullet green"></div>
        <div class="time">9 - 11am</div>
        <div class="desc">
          <h3>Finish Home Screen</h3>
          <h4>Web App</h4>
        </div>
      </li>
    </ul>
  </div>  
</div>