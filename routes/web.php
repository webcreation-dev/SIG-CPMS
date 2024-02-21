<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidatorFormController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('landing');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ********** PAGES FOR AUTHENTICATION **********

// FORMS

Route::get('/signup', function () {
    return view('auth.forms.signup');
});

Route::get('/signin', function () {
    return view('auth.forms.signin');
});

Route::get('/account_v1', function () {
    return view('account');
});

Route::middleware(['auth'])->group(function () {

    // ADMINISTRATION

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);

    Route::resource('payment', PaymentController::class);

    Route::resource('package', PackageController::class);
    Route::get('/packages_by_user/{user_id}', [PackageController::class, 'byUser'])->name('packages.by.user');


    Route::get('/account', function () {
        return view('account');
    });

    // PACKAGES EXPECTED

    Route::get('/packages-delivered', function () {
        return view('auth.my-packages.packages-expected.delivered');
    });

    Route::get('/packages-groupings', function () {
        return view('auth.my-packages.packages-expected.groupings');
    });

    Route::get('/packages-in-transit', function () {
        return view('auth.my-packages.packages-expected.in-transit');
    });

    // PACKAGES IN WAREHOURSE

    Route::get('/packages-action-required', function () {
        return view('auth.my-packages.packages-in-warehouse.action_required');
    });

    Route::get('/packages-in-progress', function () {
        return view('auth.my-packages.packages-in-warehouse.in-progress');
    });

    Route::get('/packages-ready-to-ship', function () {
        return view('auth.my-packages.packages-in-warehouse.ready-to-ship');
    });

    // PACKAGES SHIPPED

    Route::get('/packages-add-ship', function () {
        return view('auth.my-packages.packages-shipped.add-packages');
    });

    // ASSISTED PURCHASE

    Route::get('/purchase-articles', function () {
        return view('auth.my-packages.assisted-purchasing.add-articles');
    });

    Route::get('/purchase-add-articles', function () {
        return view('auth.my-packages.assisted-purchasing.new-achat');
    });

    // HELP LYNIA DELIVERY

    Route::get('/help-getting-started', function () {
        return view('auth.lynia-delivery-help.getting-started');
    });

    Route::get('/lynia-university', function () {
        return view('auth.lynia-delivery-help.academy-lynia');
    });

    // ********** END PAGES FOR AUTHENTICATION **********

});




// ********** ABOUT PAGES **********

Route::get('/lynia_locations', function () {
    return view('about.locations');
});

Route::get('/lynia_affiliates', function () {
    return view('about.lynia-affiliates');
});

Route::get('lynia_for_direct_sales', function () {
    return view('about.lynia-for-direct-sales');
});

Route::get('lynia_reviews', function () {
    return view('about.lynia-reviews');
});

Route::get('what_is_lynia', function () {
    return view('about.what-is-lynia');
});

// ********** END ABOUT PAGES **********



// ********** GETTING STARTED PAGES **********

Route::get('/faq', function () {
    return view('getting-started.faq');
});

Route::get('/lynia-free-fr-address', function () {
    return view('getting-started.lynia-free-fr-address');
});

Route::get('/lynia-pricing', function () {
    return view('getting-started.lynia-pricing');
});

Route::get('/postage', function () {
    return view('getting-started.postage');
});

Route::get('/prohibited-items', function () {
    return view('getting-started.prohibited-items');
});

// ********** END GETTING STARTED PAGES **********


// ********** FAQ PAGES **********
Route::get('/account-navigation', function () {
    return view('faq.account-navigation');
});

Route::get('/affiliate-faq', function () {
    return view('faq.affiliate-faq');
});

Route::get('/carrier-tracking', function () {
    return view('faq.carrier-tracking');
});

Route::get('/claims', function () {
    return view('faq.claims');
});

Route::get('/customs', function () {
    return view('faq.customs');
});

Route::get('/getting-started', function () {
    return view('faq.getting-started');
});

Route::get('/services', function () {
    return view('faq.services');
});

Route::get('/packages', function () {
    return view('faq.packages');
});

Route::get('/payments', function () {
    return view('faq.payments');
});

Route::get('/lynia-membership-faq', function () {
    return view('faq.lynia-membership-faq');
});
// ********** END FAQ PAGES **********



// ********** SERVICES PAGES **********

Route::get('/lynia-for-business', function () {
    return view('services.lynia-for-business');
});

Route::get('/lynia-rewards', function () {
    return view('services.lynia-rewards');
});

// ********** END SERVICES PAGES **********



// ********** VALIDATOR FORMS **********

Route::get('/check-email-unique/{email}', [ValidatorFormController::class, 'checkEmailUnique']);

Route::post('check-login-credentials', [ValidatorFormController::class, 'checkLoginCredentials'])->name('check.login.credentials');
// ********** END VALIDATOR FORMS **********



