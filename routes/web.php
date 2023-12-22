<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminBalanceController;
use App\Http\Controllers\Admin\AdminBlockchainController;
use App\Http\Controllers\Admin\AdminCoinBuyController;
use App\Http\Controllers\Admin\AdminCoinSellController;
use App\Http\Controllers\Admin\AdminCounterController;
use App\Http\Controllers\Admin\AdminEcosystemController;
use App\Http\Controllers\Admin\AdminEcosystemDataController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminFeatureArieaController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPartnerController;
use App\Http\Controllers\Admin\AdminPartnerDataController;
use App\Http\Controllers\Admin\AdminPresaleController;
use App\Http\Controllers\Admin\AdminPresaleRaiseController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminRoadmapController;
use App\Http\Controllers\Admin\AdminRoadmapDataController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminWalletController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\User\UserBuyController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserMiningController;
use App\Http\Controllers\User\UserSellCoinController;
use App\Http\Controllers\User\CryptoPaymentConttroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// cache clear
Route::get('/reboot', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    // composer dump-autoload
    dd('Done');
});
Auth::routes(['verify' => true]);
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/blockchain', [FrontendController::class, 'blockchain'])->name('frontend.blockchain');
Route::get('/about-us', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/faq', [FrontendController::class, 'faq'])->name('frontend.faq');
Route::get('/roadmap', [FrontendController::class, 'roadmap'])->name('frontend.roadmap');
Route::get('/partner', [FrontendController::class, 'partner'])->name('frontend.partner');
Route::get('/presel', [FrontendController::class, 'presel'])->name('frontend.presel');
Route::get('/echosystem', [FrontendController::class, 'echosystem'])->name('frontend.echosystem');

Route::get('privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('user.privacyPolicy');
Route::get('terms-and-condition', [FrontendController::class, 'termsCondition'])->name('user.termsCondition');
Route::get('white-paper', [FrontendController::class, 'whitePaper'])->name('user.whitePaper');




Route::get('/home', [HomeController::class, 'index'])->name('home');


// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.index');
    Route::get('/user-list', [AdminHomeController::class, 'userList'])->name('admin.user.index');
    Route::get('/user-status/{id}', [AdminHomeController::class, 'blockUser'])->name('admin.user.block');
    Route::get('/user-delete/{id}', [AdminHomeController::class, 'deleteUser'])->name('admin.user.delete');
    Route::get('/crypto-wallets', [AdminHomeController::class, 'cryptoWallets'])->name('admin.cryptoWallets');


    Route::get('/profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
    Route::post('/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/security', [AdminProfileController::class, 'security'])->name('admin.security.index');
    Route::post('/security', [AdminProfileController::class, 'securityUpdate'])->name('admin.security.update');
    Route::post('/email/update', [AdminProfileController::class, 'upateEmail'])->name('admin.email.update');


    Route::get('/setting', [AdminSettingController::class, 'index'])->name('admin.setting.index');
    Route::post('/setting', [AdminSettingController::class, 'update'])->name('admin.setting.update');
    Route::get('/coin-buy-price', [AdminSettingController::class, 'buyPrice'])->name('admin.coinBuySell');
    Route::post('/coin-buy-price', [AdminSettingController::class, 'buyCoinUpdate'])->name('admin.coinbuy.update');

    Route::resource('faq', AdminFaqController::class);
    Route::resource('ecosystem-data', AdminEcosystemDataController::class);
    Route::get('/social-media', [SocialMediaController::class, 'index'])->name('admin.socialMedia.index');
    Route::post('/social-media', [SocialMediaController::class, 'update'])->name('admin.socialMedia.update');

    Route::resource('partner', AdminPartnerController::class);
    Route::resource('team', AdminTeamController::class);
    Route::resource('presale-raise', AdminPresaleRaiseController::class);
    Route::resource('roadmap-data', AdminRoadmapDataController::class);
    Route::resource('wallet', AdminWalletController::class);
    Route::resource('counter', AdminCounterController::class);
    Route::get('/take-sale/conter', [AdminCounterController::class, 'takeSalecount'])->name('admin.counter.takeSalecount');
    Route::post('/take-sale/conter', [AdminCounterController::class, 'takeSalecountUpdate'])->name('admin.counter.takeSalecountUpdate');

    Route::get('/blockchain', [AdminBlockchainController::class, 'index'])->name('admin.blockchain.index');
    Route::post('blockchain/update', [AdminBlockchainController::class, 'update'])->name('admin.blockchain.update');

    Route::get('/about', [AdminAboutController::class, 'index'])->name('admin.about.index');
    Route::post('about/update', [AdminAboutController::class, 'update'])->name('admin.about.update');

    Route::get('/partner-data', [AdminPartnerDataController::class, 'index'])->name('admin.partner-data.index');
    Route::post('partner-data/update', [AdminPartnerDataController::class, 'update'])->name('admin.partner-data.update');

    Route::get('/presale', [AdminPresaleController::class, 'index'])->name('admin.presale.index');
    Route::post('presale/update', [AdminPresaleController::class, 'update'])->name('admin.presale.update');


    Route::get('ecosystem', [AdminEcosystemController::class, 'index'])->name('admin.ecosystem.index');
    Route::post('ecosystem/update', [AdminEcosystemController::class, 'update'])->name('admin.ecosystem.update');


    Route::get('/roadmap', [AdminRoadmapController::class, 'index'])->name('admin.roadmap.index');
    Route::post('roadmap/update', [AdminRoadmapController::class, 'update'])->name('admin.roadmap.update');


    Route::get('features/', [AdminFeatureArieaController::class, 'index'])->name('admin.feature.index');
    Route::get('features/{id}/edit', [AdminFeatureArieaController::class, 'edit'])->name('admin.feature.edit');
    Route::post('features/{id}/update', [AdminFeatureArieaController::class, 'update'])->name('admin.feature.update');


    Route::get('balance', [AdminBalanceController::class, 'index'])->name('admin.balance.index');
    Route::post('balance/add', [AdminBalanceController::class, 'add'])->name('admin.balance.add');
    Route::post('balance/remove', [AdminBalanceController::class, 'remove'])->name('admin.balance.remove');


    Route::get('coin-buy', [AdminCoinBuyController::class, 'index'])->name('admin.buyCoin.index');
    // Route::get('success/coin-buy/request', [AdminCoinBuyController::class, 'success'])->name('admin.coin.success');
    // Route::get('failed/coin-buy/request', [AdminCoinBuyController::class, 'failed'])->name('admin.coin.failed');


    // Route::get('approved/coin-buy/{id}/status', [AdminCoinBuyController::class, 'approved'])->name('admin.status.update.approved');
    // Route::get('rejected/coin-buy/{id}/status', [AdminCoinBuyController::class, 'rejected'])->name('admin.status.update.rejected');
    // Route::get('delete/coin-buy/{id}/coin', [AdminCoinBuyController::class, 'delete'])->name('admin.status.update.delete');



    Route::get('pending/coin-sell/request', [AdminCoinSellController::class, 'pending'])->name('admin.coinSell.pending');
    Route::get('success/coin-sell/request', [AdminCoinSellController::class, 'success'])->name('admin.coinSell.success');
    Route::get('failed/coin-sell/request', [AdminCoinSellController::class, 'failed'])->name('admin.coinSell.failed');


    Route::get('approved/coin-sell/{id}/status', [AdminCoinSellController::class, 'approved'])->name('admin.coinSell.status.update.approved');
    Route::get('rejected/coin-sell/{id}/status', [AdminCoinSellController::class, 'rejected'])->name('admin.coinSell.status.update.rejected');
    Route::get('delete/coin-sell/{id}/coin', [AdminCoinSellController::class, 'delete'])->name('admin.coinSell.status.update.delete');


    Route::get('privacy-policy', [AdminPageController::class, 'privacyPolicy'])->name('admin.privacyPolicy');
    Route::post('privacy-policy', [AdminPageController::class, 'privacyPolicyUpdate'])->name('admin.privacyPolicay.update');

    Route::get('terms-condition', [AdminPageController::class, 'termsCondition'])->name('admin.termsCondition');
    Route::post('terms-condition', [AdminPageController::class, 'termsConditionUpdate'])->name('admin.termsCondition.update');

    Route::get('white-paper', [AdminPageController::class, 'whitePaper'])->name('admin.whitePaper');
    Route::post('white-paper', [AdminPageController::class, 'whitePaperUpdate'])->name('admin.whitePaper.update');

});



// User Routes
Route::group(['middleware' => ['auth', 'is_user', 'is_blocked', 'verified']], function(){
    Route::get('mining', [UserHomeController::class, 'index'])->name('user.dashboard');
    Route::get('mining/start', [UserMiningController::class, 'index'])->name('user.freeMining.start');
    Route::get('mining/claim-bonus', [UserMiningController::class, 'claimBonus'])->name('user.mining.claim');
    Route::get('mining/restaking', [UserMiningController::class, 'restaking'])->name('user.mining.restaking');
    Route::get('account', [UserHomeController::class, 'account'])->name('user.account');
    Route::get('account/personal-info', [UserHomeController::class, 'personalInfo'])->name('user.personal.info');
    Route::post('account/personal-info', [UserHomeController::class, 'personalInfoUpdate'])->name('user.personalInfo.update');
    Route::get('change-password', [UserHomeController::class, 'changePassword'])->name('user.password.change');
    Route::post('update-password', [UserHomeController::class, 'updatePassword'])->name('user.password.update');
    Route::get('account/mining-history', [UserHomeController::class, 'miningHistory'])->name('user.miningHistory');
    Route::get('account/reward-history', [UserHomeController::class, 'miningReward'])->name('user.miningReward');
    Route::get('account/invite-history', [UserHomeController::class, 'inviteHistory'])->name('user.inviteHistory');



    Route::get('buy-coin', [UserBuyController::class, 'index'])->name('user.buy.index');
    Route::post('buy-coin', [UserBuyController::class, 'buy'])->name('user.coin.buy');
    Route::get('buy-history', [UserBuyController::class, 'history'])->name('user.coin.buy.history');
    Route::post('getAddress', [UserBuyController::class, 'getAddress'])->name('user.netwark.getWalletAddress');

    Route::get('sell-coin', [UserSellCoinController::class, 'index'])->name('user.coin.sell');
    Route::post('sell-coin', [UserSellCoinController::class, 'sell'])->name('user.coin.sell.submit');
    Route::get('sell-history', [UserSellCoinController::class, 'history'])->name('user.coin.sell.history');

    Route::get('cryptopayment', [CryptoPaymentConttroller::class, 'index'])->name('user.cryptopayment.index');
    Route::post('cryptopayment/createwallet', [CryptoPaymentConttroller::class, 'createNewWallet'])->name('user.cryptopayment.createwallet');
    Route::post('cryptopayment/payment', [CryptoPaymentConttroller::class, 'payment'])->name('user.cryptopayment.payment');
    Route::post('cryptopayment/withdraw', [CryptoPaymentConttroller::class, 'withdraw'])->name('user.cryptopayment.withdraw');




});
