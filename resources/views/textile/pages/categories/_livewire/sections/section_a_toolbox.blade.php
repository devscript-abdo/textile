<div class="toolbox">
    <div class="toolbox-left">
        <div class="toolbox-info">
           100 products
        </div>
    </div>

    <div class="toolbox-right">
        <div class="toolbox-sort">
            <label for="sortby">{{__('shop.shop_sortby')}}</label>
            <div class="select-custom">
                <select name="sortby" id="sortby" class="form-control">
                    <option value="popularity" selected="selected">{{__('shop.shop_sortby_populaire')}}</option>
                    <option value="rating">{{__('shop.shop_sortby_rated')}}</option>
                    <option value="date">{{__('shop.shop_sortby_date')}}</option>
                </select>
            </div>
        </div>
        <div class="toolbox-layout">
            <a href="{{route('products')}}" class="btn-layout active">
                <svg width="16" height="10">
                    <rect x="0" y="0" width="4" height="4" />
                    <rect x="6" y="0" width="10" height="4" />
                    <rect x="0" y="6" width="4" height="4" />
                    <rect x="6" y="6" width="10" height="4" />
                </svg>
            </a>
        </div>
    </div>
</div>