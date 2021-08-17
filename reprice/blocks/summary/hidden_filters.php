<div class="filter_list__content hidden_filter">
  <p class="head">Quantity Sold Filter</p>

  <div class="search_filter">
    <form action="">
      <div class="input">
        <div class="input_search input__block">
          <input type="text" placeholder="Find in the list">

          <div class="input_search__button"></div>
        </div>

        <div class="input__category">
          <?php include "blocks/summary/category_filters.php"; ?>
        </div>
      </div>

      <div class="checkbox_section">
        <div class="checkbox_section__main">
          <div class="checkbox">
            <input type="checkbox" id="all">
            <label for="all">Select All</label>
          </div>

          <div class="selected_items">
            <p>No Selected Filters</p>
          </div>
        </div>

        <div class="checkbox_section__other">
          <div class="checkbox">
            <input type="checkbox" id="quantity_1">
            <label for="quantity_1">1</label>
          </div>

          <div class="checkbox">
            <input type="checkbox" id="quantity_4">
            <label for="quantity_4">4</label>
          </div>

          <div class="checkbox">
            <input type="checkbox" id="quantity_6">
            <label for="quantity_6">6</label>
          </div>

          <div class="checkbox">
            <input type="checkbox" id="quantity_12">
            <label for="quantity_12">12</label>
          </div>

          <div class="checkbox">
            <input type="checkbox" id="quantity_27">
            <label for="quantity_27">27</label>
          </div>
        </div>
      </div>

      <div class="button_section flexbox">
        <div class="button_section__left">
          <button id="clear">Clear all filters</button>
        </div>

        <div class="button_section__right flexbox">
          <button id="cancel">Cancel</button>

          <button id="apply">Apply</button>
        </div>
      </div>
    </form>
  </div>
</div>
