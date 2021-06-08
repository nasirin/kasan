<div class="modal fade" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/laporan" method="post" class="form-horizontal" target="_blank">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mulai</label>
                        <input type="date" class="form-control col-sm-9" name="mulai" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sampai</label>
                        <input type="date" class="form-control col-sm-9" name="sampai" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Print</button>
                    <a href="/laporan" class="btn btn-primary" target="_blank">Print All</a>
                </div>
            </form>
        </div>
    </div>
</div>