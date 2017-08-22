<div class="columns">
  <ul class="price">
    <li class="header">Shared</li>
    <li class="grey cost"><span>$ </span>2</li>
    <li class="feature">cPanel Account</li>
    <li class="feature">Shared Memory</li>
    <li class="feature">1 GB Space</li>
    <li class="feature">1 GB Bandwidth</li>
    <li class="grey"><a href="/login" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns highlight">
  <ul class="price">
    <li class="header">Container</li>
    <li class="grey cost"><span>$ </span>5</li>
    <li class="feature">cPanel and Jailed SSH</li>
    <li class="feature">256 MB Ram</li>
    <li class="feature">10 GB Space</li>
    <li class="feature">10 GB Bandwidth</li>
    <li class="grey"><a href="/login" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Dedicated</li>
    <li class="grey cost"><span>$ </span>10</li>
    <li class="feature">cPanel and Full SSH</li>
    <li class="feature">Up to 16GB Ram</li>
    <li class="feature">Up to 100 GB Space</li>
    <li class="feature">Unmetered Bandwidth</li>
    <li class="grey"><a href="/login" class="button">Sign Up</a></li>
  </ul>
</div>

<style>
  * {
    box-sizing: border-box;
  }

  /* Create three columns of equal width */
  .columns {
    float: left;
    width: 33.3%;
    padding: 8px;
  }

  /* Style the list */
  .price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }

  /* Add shadows on hover */
  .price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
  }

  /* Pricing header */
  .price .header {
    background-color: #111;
    color: white;
    font-size: 18px;
    letter-spacing: 1px;
    font-weight: bold;
  }

  /* List items */
  .price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
  }

  .price .cost {
    font-weight: bold;
    font-size: 32px;
    padding: 10px;
    color: #333;
    text-shadow: 1px 1px 1px #fff;
  }

  .price .cost span {
    font-size: 12px;
    vertical-align: middle;
  }

  .price .feature {
    color: #333;
    font-family: sans;
  }

  /* Grey list item */
  .price .grey {
    background-color: #eee;
  }

  /* The "Sign Up" button */
  .button {
    background-color: #ff5722;
    border: none;
    color: #111;
    font-weight: bold;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    letter-spacing: 1px;
  }

  .button:hover {
    color: #fff;
  }

  .columns.highlight .header {
    background-color: #ff5722;
  }

  /* Change the width of the three columns to 100%
  (to stack horizontally on small screens) */
  @media only screen and (max-width: 600px) {
    .columns {
      width: 100%;
    }
  }
</style>
