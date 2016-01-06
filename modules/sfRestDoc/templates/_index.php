<?php $i=0; foreach ($ressource as $name=>$services): ?>

<table>
    <caption>
        <a id="ressource-<?php echo sfRestDoc::slugify($name) ?>"></a>
        <strong><?php echo __($name) ?></strong>
        <p></p>
    </caption>
    <thead>
        <tr>
            <th class="rest-doc-service"><?php echo __('Service')?></th>
            <th class="rest-doc-description"><?php echo __('Description')?></th>
            <th class="rest-doc-available"><?php echo __('Dispo ?')?></th>
        </tr>
    </thead>
    <tbody>
        <?php $j = 0; foreach ($services as $service): ?>
        <tr class="<?php echo $j++%2?"odd":"even"?>">
            <td class="rest-doc-service"><a href="<?php echo url_for("rest_docs_plugin_show", $service->getRawValue())?>"><?php echo $service->getTitle()?></a></td>
            <td class="rest-doc-description"><?php echo $service->getDescription() ?></td>
            <?php if ($service->getDeprecated()):?>
                <td class="rest-doc-deprecated"><strong><?php echo __('deprecated')?></strong></td>
            <?php elseif ($service->getAvailable()):?>
                    <td class="rest-doc-available"><strong><?php echo __('ok')?></strong></td>
            <?php else: ?>
                <td class="rest-doc-available"><small><?php echo __('brouillon')?></small></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php endforeach; ?>