<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CSS</title>
    <style>
      body {
        box-sizing: border-box;
        font-family: Consolas, monospace;
      }
      h1 {
        text-align: center;
      }
      img {
        max-width: 100%;
      }
      .a {
        width: 400px;
        margin: 0px auto;
      }
	  .a img {
  transition: all 0.2s linear;
}
.a:hover img {
  transform: scale(1.4);
}aaaaaaaaaaaaaa
    </style>
  </head>
  <body>
    <h1>Hover Effect</h1>
    <div class="a">
      <img src="../cow/img/assets/img/portfolio/4.jpg" alt="">
    </div>
  </body>
</html>