<fieldset class="personalblock" id="mozilla_sync">
    <label><?php p($l->t('Mozilla Sync')); ?></label>
    <table class="nostyle">
        <tr>
            <td id="enable">
                <input type="checkbox" name="restrictgroup" id="restrictgroup"
                    <?php if ($_['mozillaSyncRestrictGroupEnabled']) {
                            print_unescaped('checked="checked" ');
                        }
                    ?>
                />
                <label for="restrictgroup"><?php p($l->t("Restrict to group")); ?></label>
            </td>
            <td id="group">
                <select id="groupselect" name="group" data-placeholder="<?php p($l->t('Group'))?>">
                    <?php foreach (\OCA\mozilla_sync\User::getAllGroups() as $group): ?>
                        <option value="<?php p($group);?>"><?php p($group);?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
    </table>
    <em><?php p($l->t("When activated, only members of this group can access Mozilla Sync."));?></em>
</fieldset>
