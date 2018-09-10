<section>
  <div class="container">
    <div class="error-page">
      <i class="fa fa-utensils"></i>
      <h1>Page not found</h1>
      <p>We were unable to find the desired page.</p>
      <p class="joke">
        <small>A joke for the inconvenience:</small>
        <?php
          $jokes = array(
            'My friend thinks he is smart. He told me an onion is the only food that makes you cry, so I threw a coconut at his face.',
            'What happens to a frog\'s car when it breaks down? It gets toad away.',
            'Q: Is Google male or female?<br> A: Female, because it doesn\'t let you finish a sentence before making a suggestion.',
            'Q: What did the duck say when he bought lipstick?<br> A: "Put it on my bill."',
            'A teacher asked her students to use the word "beans" in a sentence. "My father grows beans," said one girl. "My mother cooks beans," said a boy. A third student spoke up, "We are all human beans."',
            'Instead of "the John," I call my toilet "the Jim." That way it sounds better when I say I go to the Jim first thing every morning.',
            'Q: Why couldn\'t the leopard play hide and seek?<br> A: Because he was always spotted.'
          );
          shuffle($jokes);
          echo $jokes[0];
        ?>
      </p>
      <a href="/" class="btn">Go to home</a>
    </div>
  </div>
</section>
