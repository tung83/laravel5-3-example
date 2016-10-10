<div class="recruit row">
    
    <div id="recruit-sum" class="col-md-6">
        <div class="left"> </div>
        <div class="right"> </div>
            <p>Theo Cơ quan Năng lượng nguyên tử quốc tế (IAEA), đến 20/9/2016 Trung Quốc có 35 tổ máy điện hạt nhân đang hoạt động, tổng công suất là 31.617 MW. Bên cạnh đó nhiều tổ máy khác đang và sẽ được xây dựng. Nhằm đáp ứng nhu cầu tiêu thụ điện năng, quốc gia này dự kiến vận hành 100 nhà máy điện hạt nhân vào năm 2030 và 170 nhà máy với công suất 195.000 MW vào năm 2050.</p>
       
    </div>
    <ol>
        @foreach($recruits as $index => $recruit) 
            <li class="recruit-item item{{$index+1}}">
                <a href="{{ url(getCategorySlugLink('recruit', $recruit)) }}">
                   {{languageTransform($recruit, 'title')}}  
                </a>
            </li>
        @endforeach        
    </ol>
</div>