<div class="filters flexbox">
  <div class="filters__left">
    <div class="columns">
      <p class="columns__select">Select columns to show</p>

      <div class="columns__filters hidden_filter">
        <p class="head">Columns Filter</p>

        <div class="search_filter">
          <form action="">
            <input type="text" placeholder="Find in the list">

            <div class="checkbox_section">
              <div class="checkbox_section__main">
                <div class="checkbox">
                  <input type="checkbox" id="all">
                  <label for="all">Select All</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="defaults">
                  <label for="defaults">Select Defaults</label>
                </div>
              </div>

              <div class="checkbox_section__other">
                <div class="checkbox">
                  <input type="checkbox" id="title">
                  <label for="title">Title</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="cover">
                  <label for="cover">Cover</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="id">
                  <label for="id">Order ID</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="sku">
                  <label for="sku">SKU</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="asin">
                  <label for="asin">ASIN</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="solid_price">
                  <label for="solid_price">Solid Price</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="costs">
                  <label for="costs">Cost</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="fees">
                  <label for="fees">AMZ Fees</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="profit_loss">
                  <label for="profit_loss">Profit / Loss</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="quantity">
                  <label for="quantity">Quantity Sold</label>
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
    </div>
  </div>

  <div class="filters__right flexbox">
    <button id="clear_all">Clear all filters</button>

    <p class="light displaying_result">Displaying 21 - 40 of 115 results</p>

    <div class="rows flexbox">
      <p>Rows per page:</p>

      <select name="rows_per" id="rows_per">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="250">250</option>
        <option value="1000">1000</option>
      </select>
    </div>

    <p class="light page_result">1 of 10</p>

    <div class="jump">
      <div class="jump__to">
        <p>Jump to page</p>
      </div>

      <div class="jump__form">
        <p class="head">Go to page</p>

        <div class="number">
          <input type="number" max="10" min="1" value="1" onkeyup="this.value=this.value.replace(/[^0-9]+/g,''); isright(this);">
        </div>

        <p>1 of 10</p>
      </div>
    </div>
  </div>
</div>
