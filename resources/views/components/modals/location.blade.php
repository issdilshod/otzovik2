<!-- Modal -->
<div class="modal fade" id="modal01" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">      
      <form>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <div class="modal-title">Где вы находитесь?</div>
        <div class="full-search">                      
          <div class="form-group">
            <input type="text" class="form-control search-location" placeholder="Укажите местоположение">
            <div class="search-btn">
              <svg class="icon">
                <use xlink:href="#search-ico"></use>
              </svg>
            </div>            
          </div>          
        </div>
        <ul class="city-list">
            @foreach ($cities as $city)
                <li>
                    <?php $value = ['name' => $city->name, 'slug' => $city->slug, 'id' => $city->id ]; ?>
                    <a class="choose-location" data-data="{{json_encode($value)}}">{{$city->name}}</a>
                </li> 
            @endforeach
        </ul>
      </form>
    </div>  
  </div>
</div>

<script>
    // on document ready set default location as Moscow
    $(document).ready(function(){
        var storageLocation = localStorage.getItem('_location');

        var currentCity = '';

        if (storageLocation){
            storageLocation = JSON.parse(storageLocation);
            currentCity = storageLocation['name'];
        }else{
            // default Moscow
            storageLocation = JSON.stringify('<?=json_encode(['name' => $cities[0]->name, 'slug' => $cities[0]->slug, 'id' => $cities[0]->id ])?>');

            localStorage.setItem('_location', storageLocation);

            currentCity = '<?=$cities[0]->name?>';
        }

        // set location to template
        $('.location .name').html(currentCity);
    })

    // choose location and save to storage
    $(document).on('click', '.choose-location', function(e){
        e.preventDefault();

        var tmpData = $(this).data('data');

        // set location to template
        $('.location .name').html(tmpData['name']);

        var data = JSON.stringify(tmpData);

        localStorage.setItem('_location', data);
    });

    // search more cities
    $(document).on('click', '.full-search .search-btn', function(e){
        e.preventDefault();

        var value = $('.search-location').val();

        // TODO: Ajax request and show in form
    })
</script>