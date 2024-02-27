<!DOCTYPE html>
<head>
<title>Portfolio</title>
<style>
body {
	margin:0;
	background: linear-gradient(#fff, #222);
}
#nav {
	box-sizing:border-box;
	background-color:#f1f1f1;
	height:50px;
	background-color:#000;
}
#hero {
	color:#333;
	text-align: justify;
}
.sects {
	float:left;
	padding:10px;
	width: 50%;
	box-sizing:border-box;
}
#hero h1 {
	text-align:center;
}
#hero p {
	text-align:center;
}
#hero h2 {
	text-align:center;
}
.btn {
	float:left;
	padding:14px;
	text-decoration:none;
	color:#fff;
	
}
img {
	border-radius:20%;
	height:150px;
}


/* begin of contact */
#contact {
	clear:left;
}
#contact h2 {
	text-align:center;
}
.contact-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 0 auto;
  padding: 20px;
  position: relative;
  max-width: 840px;
}
.form-control, 
textarea {
  width: 400px;
  letter-spacing: 1px;
  margin-top: 10px;
  padding:10px;
}
.form-control:focus, 
textarea:focus {
	outline-color:#333;
}
.send-button {
  margin-top: 15px;
  height: 34px;
  width: 400px;
  overflow: hidden;
  transition: all .2s ease-in-out;
  background-color:#333;
  color:#fff;
  border:none;
}
.alt-send-button {
  width: 400px;
  height: 34px;
  transition: all .2s ease-in-out;
}

.send-text {
  display: block;
  margin-top: 10px;
  font: 700 12px 'Lato', sans-serif;
  letter-spacing: 2px;
}
.alt-send-button:hover {
  transform: translate3d(0px, -35px, 0px);
  cursor:pointer;
}
.direct-contact-container {
  width: 400px;
}
.contact-list {
  list-style-type: none;
  margin-left: -30px;
  padding-right: 20px;
}
.list-item {
  line-height: 4;
  color: #aaa;
}
.contact-text {
  font: 300 18px 'Lato', sans-serif;
  letter-spacing: 1.9px;
  color: #333;
}
.place {
  margin-left: 62px;
}

.phone {
  margin-left: 56px;
}

.gmail {
  margin-left: 53px;
}
.contact-text a {
  color: #333;
  text-decoration: none;
  transition-duration: 0.2s;
}
.contact-text a:hover {
  color: #bbb;
  text-decoration: none;
}
.social-media-list {
  position: relative;
  font-size: 22px;
  text-align: center;
  width: 100%;
  margin: 0 auto;
  padding: 0;
}
.social-media-list li a {
  color: #333;
  padding:10px;
}
.social-media-list li {
  position: relative; 
  display: inline-block;
  height: 60px;
  width: 60px;
  margin: 10px 3px;
  line-height: 60px;
  border-radius: 50%;
  color: #333;
  background-color: #f1f1f1;
  cursor: pointer; 
  transition: all .2s ease-in-out;
}
.social-media-list li:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 60px;
  height: 60px;
  line-height: 60px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 0 0 0 1px #333;
  transition: all .2s ease-in-out;
}
.social-media-list li:hover {
  background-color: #333; 
}

.social-media-list li:hover:after {
  opacity: 1;  
  transform: scale(1.12);
  transition-timing-function: cubic-bezier(0.37,0.74,0.15,1.65);
}

.social-media-list li:hover a {
  color: #fff;
}
.copyright {
  font: 200 14px 'Oswald', sans-serif;
  color: #555;
  letter-spacing: 1px;
  text-align: center;
}

hr {
  border-color: rgba(255,255,255,.6);
}

/*end of contact */

/* Float four columns side by side */
.column {
  float: left;
  width: 23%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

</style>
<script src="https://kit.fontawesome.com/ed5cc96c02.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="nav">
<a href="" class="btn">HOME</a>
<a href="#hero" class="btn">MY PORTFOLIO</a>
<a href="#contact"class="btn">CONTACT ME</a>
</div>
<div id="hero" class="sects">
<center><img src="mypic.jpg" ></center>
<h1>I'm Karol Onyango</h1>
<p>Software Engineer and Tech Enthusiast</p>
<h2>ABOUT ME</h2>
Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
<div class="sects">
<div class="works">
<h2>MY SKILLS</h2>
<ul>
<li>Web Design</li>
<li>PHP</li>
<li>Javascript</li>
<li>C/C++</li>
</ul>
</div>
<div class="works">
<h2>MY PROJECTS</h2>
<ul>
<li>Increasetraffic</li><a href="#">view</a>
<li>K-tech Hosptal Management System</li><a href="#">view</a>
<li>K-tech receipt Maker</li><a href="#">view</a>
<li>K-tech School Management System</li><a href="#">view</a>
</ul>
</div>
<div id="row">
<div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>5+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>10+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>10+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>
</div>
<div id="contact">
<h2>CONTACT ME</h2>
<div class="contact-wrapper">
<form id="contact-form">
 <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required><br>
 <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required><br>
 <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea><br>
	
	<button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
</form>
<div class="direct-contact-container">
		<ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Nairobi, Kenya</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:254114795313" title="Give me a call">+254114795313</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:karolonyango18@gmail.com" title="Send me an email">karolonyango18@gmail.com</a></span></i></li>
          
        </ul>
		 <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>       
        </ul>
        <hr>.
		
		<div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
</div>
</div>
</div>
</body>
</html>