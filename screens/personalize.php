<section class="personalize">
  <div class="container">
    <div class="content">
      <h1>Personalize</h1>
      <form action="/personalize" method="post">
        <label for="allergies" class="section-title">Allergies</label>
        <input class="default" type="text" name="allergies" value="" placeholder="Peanuts, ...">
        <hr>
        <h2 class="section-title">Preferences</h2>
        <div class="radio">
          <input id="none" name="preferences" value="none" type="radio" checked>
          <label for="none" class="radio-label">No preferences</label>
        </div>
        <div class="radio">
          <input id="vegetarian" name="preferences" value="vegetarian" type="radio">
          <label for="vegetarian" class="radio-label">Vegetarian</label>
        </div>
        <div class="radio">
          <input id="vegan" name="preferences" value="vegan" type="radio">
          <label for="vegan" class="radio-label">Vegan</label>
        </div>
        <button class="btn pretend-personalize-btn" type="button" name="login">
          Save preferences <i class="fa fa-fw fa-angle-right"></i>
        </button>
      </form>
    </div>
  </div>
</section>
