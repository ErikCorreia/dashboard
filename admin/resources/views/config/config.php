<main id="page">
    <div class="container">

        <section class="my-3">
            <div class="bg-white rounded shadow-sm px-4 py-3">
              <h5 class="section-title m-0">Configurações</h5>
            </div>
        </section>

        <form class="mt-3 bg-white p-3" action="" id="google-analytics" method="POST">
            <div class="form-group">
                <label class="text-secondary m-2" for="gtag">Nome do site</label>
                <input class="form-control" type="text" name="title" id="title" value="<?= $config->getTitle() ?>">
            </div>

            <div class="form-group">
                <label class="text-secondary m-2" for="description">Descrição do Site</label>
                <textarea class="form-control" name="description" id="description" value="<?= $config->getDescription() ?>" rows="9"></textarea>
            </div>

            <div class="form-group">
                <label class="text-secondary m-2" for="google_metric_id">Google Analytics Metric Id</label>
                <input class="form-control" type="text" name="google_metric_id" id="google_metric_id" value="<?= $config->getGoogleAnalyticsMetricId() ?>">
            </div>

            <button class="btn btn-primary bold my-3">Atualizar</button>
        </form>
    </div>
</main>
