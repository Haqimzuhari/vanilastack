<form method="post" class="space-y-4">
    <div class="flex justify-between items-center border-b border-zinc-100 pb-2">
        <div>
            <p class="font-semibold">Basic Information</p>
            <p class="text-xs font-light text-zinc-400">Update your basic information here.</p>
        </div>

        <div>
            <button type="button" class="btn btn-primary px-4 py-2">Update</button>
        </div>
    </div>

    <div class="flex items-start w-full max-w-screen-xl">
        <div class="w-full">
            <p class="text-xs">Fullname</p>
        </div>

        <div class="w-full">
            <?php $field=new Elem('field.profile', ['crud'=>'u', 'no_label'=>'yes', 'value'=>$value??'']); $field->close() ?>
        </div>
    </div>
</form>