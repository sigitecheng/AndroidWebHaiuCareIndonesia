@include('fe_dashboard.menu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-slate-100 overflow-x-hidden pb-4">
        <div class="header flex flex-col bg-[#5856c5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#5bc7eb] to-[#0b4fb6] -mb-[181px]" style="background-image: linear-gradient(to bottom, #2fb7da, #1539b1);">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <a href="/">
                    <div class="flex items-center gap-[10px]">
                        <div class="w-10 h-10 flex shrink-0">
                           <img src="/assets/css/fe_css/images/icons/menuandroid/menuback.png" alt="icon">
                       </div>
                       <div class="flex flex-col text-white">
                           {{-- <p class="text-xs leading-[18px]">Location</p> --}}
                           <p class="font-semibold text-sm">HaiuCare Bangun Indonesia</p>
                       </div>
                   </div>
               </a>   
                
                
               </nav>
   
               <div class="mt-[30px] z-10">
                   <h1 class="font-extrabold text-2xl leading-[36px] text-white text-center" style="font-size:18px">Daftar Menu Makan Gratis<br></h1>
                   {{-- <h4 class="font-extrabold text-xl leading-[36px] text-white text-center" style="font-size: 14px">Tentang Kami</h4> --}}
               </div>
               
               <div style="width: 30%; height: fit-content; overflow: hidden; margin-top: 0.25rem; margin-bottom: 1rem; margin-left: auto; margin-right: auto;">
                   {{-- <img src="/assets/css/fe_css/images/tentangkami/tentangkami.png" class="width: 100%; height: 100%; object-fit: contain" alt="background"> --}}
               </div>
   
        </div>
        <div class="flex flex-col gap-4 px-4">

            @foreach ($data_daftarmenumakanan as $data)
                
            <div class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white" style="background-image: linear-gradient(to bottom, rgb(69, 241, 54), rgb(190, 192, 206)); margin-top:5px;">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden" style="margin-right: 15px;">
                        <img src="{{ asset($data->gambar)}}" class="w-full h-full object-cover" alt="{{ $data->gambar }}">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Menu Makanan : <span style="font-size: 14px; color:blue">{{ $data->menu}}</span></p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Deskripsi : <span class="font-bold text-stone-800">{{ $data->deskripsi}}</span></p>  --}}
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px; text-align:justify;">Keterangan : <span style="font-size: 14px; color: black; border: black;">{{ $data->keteranganmenu}} </span></p> 
                        <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]" style="font-size: 14px;">Status: <span style="display: inline-block; padding: 2px 12px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:90px; background-color: #b3641b; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#000000'; this.style.color='#fff';">{{ $data->status}}</p> 
                        {{-- <p class="text-sm2 font-semibold line-clamp-1 hover:line-clamp-none leading-[18px]">Rumah Makan : <span class="bg-blue-200 px-3 badge-pill rounded-full font-bold text-stone-800">{{ $data->nama_rumah_makan}}</span></p>  --}}
                        {{-- <span style="background-color: rgb(36, 36, 179); color: white; padding: 2px 10px; border-radius: 5px; font-size:12px;">Show Details</span> --}}
                        {{-- <a href="/daftarumkm/{{ $data->namarumahmakan}}">
                            <span style="display: inline-block; padding: 2px 22px; font-weight: bold; font-size: 12px; color: #fff; border-radius: 9999px; width:130px; background-color: #0c0fbd; line-height: 18px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#4f40d9'; this.style.color='#fff';">Show Details</span>
                        </a> --}}
                        {{-- <a href="/dashboard/posts/{{ $post->slug }}">
                            <button class="btn btn-primary" data-toggle="modal" ><i class="fa fa-eye"></i></button>
                        </a> --}}
                        
                    </div>
                    </div>
                </div>
            

           
            @endforeach
            
            
        </div>

             
        @include('fe_dashboard.menu.menufooter')
        @include('fe_dashboard.menu.enter')

        @include('fe_dashboard.menu.android')

        

    </section>


    @include('fe_dashboard.menu.footer')