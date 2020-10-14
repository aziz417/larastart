@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content text-center p-md">
                        <h2><span class="text-navy">Welcome Admin Dashboard</span></h2>
                        <p>
                            আবূ মূসা (রাঃ) হতে বর্ণিত। তিনি বলেন, তারা (সহাবাগণ) জিজ্ঞেস করলেন, হে আল্লাহর রাসূল! ইসলামে কোন্ জিনিসটি উত্তম? তিনি বললেনঃ যার জিহবা ও হাত হতে মুসলিমগণ নিরাপদ থাকে। (মুসলিম ১/১৪ হাঃ ৪২, আহমাদ ৬৭৬৫) (আধুনিক প্রকাশনীঃ ১০, ইসলামিক ফাউন্ডেশনঃ ১০)
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-universal-access fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span>  </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-universal-access fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span>  </span>
                            <h2 class="font-bold">{{--{{ $overseers }}--}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-image fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
