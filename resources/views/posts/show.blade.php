@extends('layout.layout')

@section('body.content')
<div class="w3-btn-floating-large w3-red" id="floating"><i><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></div>
<a class="w3-btn-floating-large w3-teal" id="floating-right"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<div class="container">
    <div class="title-wrapper">
        <div style="padding-left: 100px;padding-top: 100px;position: relative;">
            <span style="font-family: 'Bangers';font-size: 50px;">
                The Witcher 3: Wild Hunt
            </span>
        </div>
    </div>
    <!-- 2 columns -->
    <div style="margin-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <div id="myCarousel" class="carousel slide" style="margin-top:30px;">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <iframe width="650" height="338" src="https://www.youtube.com/embed/glo7AzNq8YY" frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <img src="https://images-1.gog.com/fd7c9b743b1f572b8fd632a128af3f4e3da01bcf722a89ebe06d53dc575715cb_product_card_screenshot_600.jpg" width="652" height="338"/>
                            </div>
                            <div class="item">
                                <img src="https://images-1.gog.com/ab3a940de6909e3a158ada6e97ab52209ba553eb51cef4c88e316191573df1f6_product_card_screenshot_600.jpg" width="652" height="338"/>
                            </div>
                            <div class="item">
                                <img src="https://images-1.gog.com/2f165f28005b9a1cd2f6150e1c6e726c5725b657daa61adef794cd5f716094a7_product_card_screenshot_600.jpg" width="652" height="338"/>
                            </div>
                            <div class="item">
                                <img src="https://images-1.gog.com/4e4fa3151d55f09c181a8bb94001d8b51a04b43f654e030a548f549167519058_product_card_screenshot_600.jpg" width="652" height="338"/>
                            </div>
                        </div>

                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                    <div style="margin-top: 30px;">
                        <span style="text-align: center; font-family: 'Sriracha', cursive;;font-size: 40px;color: white; text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;">
                            <center>
                                Mô tả
                            </center>
                        </span>
                        <hr>
                        <span style=" font-family:'Open Sans'; font-size: 15px;">
                            About: A truly next-generation role playing game combining a mature, non-linear story with a vast open world.
                            The Witcher 3: Wild Hunt, the RPG epic with a mature, non-linear story that reacts to your decisions, a vast open world with a living ecosystem, dynamic and tactical combat, and stunning visuals, is available on GOG.com!
                            We are part of the CD PROJEKT family, so buying here also gives you the chance to support us directly!
                            The Witcher 3: Wild Hunt - Expansion Pass also available!
                            The Expansion Pass secures your access to two epic adventures set in the vibrant world of monster hunter Geralt of Rivia. The upcoming expansions will offer gamers new content, gear and foes, and will feature characters both new and dearly missed -- all crafted with maximum attention to detail and quality.
                            Game details:
                            You are The Witcher, professional monster hunter, a killer for hire. Trained from early childhood and mutated to gain superhuman skills, strength and reflexes, witchers are a distrusted counterbalance to the monster-infested world in which they live. You are a drifter, always on the move, following in the footsteps of tragedy to make other people's problems your own - if the pay is good. You are now taking on your most important contract yet: to track down the child of prophecy, a living weapon, a key to save or destroy this world. You will make choices that go beyond good & evil, and you will face their far reaching consequences.
                            The Witcher 3: Wild Hunt is a story-driven next-generation open world role-playing game, set in a troubled and morally indifferent fantasy universe. Built for endless adventure, the massive open world of The Witcher sets new standards in terms of size, depth and complexity. You will traverse a vast open world, rich with merchant cities, dangerous mountain passes, and forgotten caverns to explore. It's survival of the fittest - deal with treasonous generals, devious witches and corrupt royalty to provide dark and dangerous services, then invest your rewards to upgrade your equipment, or spend them away on pleasures of the night.


                        </span>
                        <hr>
                        <hr>
                        <a href="{{route('game.edit', $game->id)}}"><button class="btn btn-lg btn-info">Chỉnh sửa bài viết</button></a>
                        {!! Form::open([
                	            'route' => ['game.delete', $game->id],
                	            'method' => 'DELETE',
                			    'style' =>'display: inline'
                            ])
                		!!}
                			<button class="btn btn-lg btn-danger">Xóa bài viết này</button>
                		{!! Form::close() !!}
                        <hr><hr>
                    </div>

                </div>
                <div class="col-xs-4">
                    <div>
                        <div style="margin-top: 30px;width: 400px;height: 150px; position: relative;padding: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);text-align:center;">

                            <span style="font-family:'Bangers';font-size:40px;text-align:center;"> $55 </span>
                            <hr style="margin:0px;padding: 0px;">
                            <div style="position: absolute;bottom:15px;margin-left:20%">
                                <button class="btn btn-success" style="width:204px;height: 50px;font-size:20px;padding: 10px; border-radius:0">Thêm vào giỏ</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <hr>
                            <span style="font-family: 'Sriracha', cursive;;font-size: 2em">
                                <center>
                                    Cấu hình tối thiểu:
                                </center>
                            </span>
                            <div style="font-family: 'Open Sans';margin-top: 10px;">
                                <table class="table">
                                    <tr>
                                        <td>
                                            OS :
                                        </td>
                                        <td>
                                            64-bit Windows 7 or 64-bit Windows 8 (8.1)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPU
                                        </td>
                                        <td>
                                            Intel CPU Core i5-2500K 3.3 GHz or AMD CPU Phenom II X4 940
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Memory
                                        </td>
                                        <td>
                                            RAM 6 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Graphic
                                        </td>
                                        <td>
                                            Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870
                                            Please mind that we only officially support full-size desktop graphics cards
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            HDD
                                        </td>
                                        <td>
                                            35 GB of available space
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DirectX
                                        </td>
                                        <td>
                                            11
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <span style="font-family: 'Sriracha', cursive;; font-size: 2em">
                                <center>
                                    Cấu hình yêu cầu:
                                </center>
                            </span>
                            <div style="font-family: 'Open Sans';margin-top: 10px;">
                                <table class="table">
                                    <tr>
                                        <td>
                                            OS :
                                        </td>
                                        <td>
                                            64-bit Windows 7 or 64-bit Windows 8 (8.1)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPU
                                        </td>
                                        <td>
                                            Intel CPU Core i5-2500K 3.3 GHz or AMD CPU Phenom II X4 940
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Memory
                                        </td>
                                        <td>
                                            RAM 6 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Graphic
                                        </td>
                                        <td>
                                            Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870
                                            Please mind that we only officially support full-size desktop graphics cards
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            HDD
                                        </td>
                                        <td>
                                            35 GB of available space
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DirectX
                                        </td>
                                        <td>
                                            11
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@stop
