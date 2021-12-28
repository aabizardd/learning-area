<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Cek Resi</h4>
                    <div class="breadcrumb__links">
                        <a href="index.html">Home</a>
                        <span>Cek Resi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shop spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12" style="margin-top: -100px;">
                <center>
                    <img src="<?=base_url('assets_arealama/img/ekspedisi.jpg')?>" alt="" width="300">
                </center>

                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;"
                    id="error_log">
                    <strong>Mohon maaf!</strong> Data yang kamu cari tidak ditemukan, periksa lagi jenis kurir dan nomor
                    resi anda, Terimakasih!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form>
                    <div class="form-group">
                        <label>Pilih Kurir</label>
                        <select class="custom-select" id="courier_input">
                            <option value selected hidden>Pilih Kurir...</option>
                            <?php foreach ($kurirs as $item): ?>
                            <option><?=$item?></option>
                            <?php endforeach?>
                        </select>
                    </div>

                    <div class="form-group mt-5">
                        <label for="exampleInputPassword1">Nomor Resi</label>
                        <input type="text" class="form-control" id="awb_input" placeholder="Masukkan Nomor Resi"
                            required>
                    </div>

                    <button class="btn btn-primary w-100" id="search-button" type="button"
                        style="background-color: #893D39;">Lacak</button>
                    <button class="btn btn-primary w-100" type="button" id="load_button" disabled
                        style="display: none;background-color: #893D39;">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Tunggu Sebentar...
                    </button>
                </form>

                <hr>
                <div class="row" id="resi-status">


                </div>
                <div class="container" id="track-info">


                </div>

            </div>
        </div>
    </div>
</section>

<style>
.tracking-detail {
    padding: 3rem 0
}

#tracking {
    margin-bottom: 1rem
}

[class*=tracking-status-] p {
    margin: 0;
    font-size: 1.1rem;
    color: #fff;
    text-transform: uppercase;
    text-align: center
}

[class*=tracking-status-] {
    padding: 1.6rem 0
}

.tracking-status-intransit {
    background-color: #F3F2EE;

}

.tracking-status-outfordelivery {
    background-color: #f5a551
}

.tracking-status-deliveryoffice {
    background-color: #f7dc6f
}

.tracking-status-delivered {
    background-color: #4cbb87
}

.tracking-status-attemptfail {
    background-color: #b789c7
}

.tracking-status-error,
.tracking-status-exception {
    background-color: #d26759
}

.tracking-status-expired {
    background-color: #616e7d
}

.tracking-status-pending {
    background-color: #ccc
}

.tracking-status-inforeceived {
    background-color: #214977
}

.tracking-list {
    border: 1px solid #e5e5e5
}

.tracking-item {
    border-left: 1px solid #e5e5e5;
    position: relative;
    padding: 2rem 1.5rem .5rem 2.5rem;
    font-size: .9rem;
    margin-left: 3rem;
    min-height: 5rem
}

.tracking-item:last-child {
    padding-bottom: 4rem
}

.tracking-item .tracking-date {
    margin-bottom: .5rem
}

.tracking-item .tracking-date span {
    color: #888;
    font-size: 85%;
    padding-left: .4rem
}

.tracking-item .tracking-content {
    padding: .5rem .8rem;
    background-color: #f4f4f4;
    border-radius: .5rem
}

.tracking-item .tracking-content span {
    display: block;
    color: #888;
    font-size: 85%
}

.tracking-item .tracking-icon {
    line-height: 2.6rem;
    position: absolute;
    left: -1.3rem;
    width: 2.6rem;
    height: 2.6rem;
    text-align: center;
    border-radius: 50%;
    font-size: 1.1rem;
    background-color: #fff;
    color: #fff
}

.tracking-item .tracking-icon.status-sponsored {
    background-color: #f68
}

.tracking-item .tracking-icon.status-delivered {
    background-color: #4cbb87
}

.tracking-item .tracking-icon.status-outfordelivery {
    background-color: #f5a551
}

.tracking-item .tracking-icon.status-deliveryoffice {
    background-color: #f7dc6f
}

.tracking-item .tracking-icon.status-attemptfail {
    background-color: #b789c7
}

.tracking-item .tracking-icon.status-exception {
    background-color: #d26759
}

.tracking-item .tracking-icon.status-inforeceived {
    background-color: #214977
}

.tracking-item .tracking-icon.status-intransit {
    color: #e5e5e5;
    border: 1px solid #e5e5e5;
    font-size: .6rem
}

@media(min-width:992px) {
    .tracking-item {
        margin-left: 10rem
    }

    .tracking-item .tracking-date {
        position: absolute;
        left: -10rem;
        width: 7.5rem;
        text-align: right
    }

    .tracking-item .tracking-date span {
        display: block
    }

    .tracking-item .tracking-content {
        padding: 0;
        background-color: transparent
    }
}
</style>