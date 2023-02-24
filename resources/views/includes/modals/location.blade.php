<!-- Modal -->
<div class="modal fade" id="modal01" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">      
            <form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <div class="modal-title">Выберите город</div>
                <div class="full-search">                      
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваш город">
                        <div class="map-btn">
                        <svg class="icon">
                            <use xlink:href="#map-ico"></use>
                        </svg>
                        </div>            
                    </div>          
                </div>
                <ul class="city-list">
                    @foreach ($cities as $city)
                        <li><a href="#">{{$city->name}}</a></li> 
                    @endforeach
                </ul>
            </form>
        </div>  
    </div>
</div>