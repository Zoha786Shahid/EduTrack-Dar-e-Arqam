@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div style="text-align: center">
    @if (Session::get('success', false))
        <?php $data = Session::get('success'); ?>
        @if (is_array($data))
            @foreach ($data as $msg)
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-check"></i>
                    {{ $msg }}
                </div>
            @endforeach
        @else
            <div class="alert alert-warning" role="alert">
                <i class="fa fa-check"></i>
                {{ $data }}
            </div>
        @endif
    @endif
</div>
<script>
    // Wait for the DOM to fully load
    document.addEventListener("DOMContentLoaded", function() {
        // Select all alert elements
        var alerts = document.querySelectorAll('.alert-warning');

        // Set a timeout to hide alerts after 2 seconds (2000 milliseconds)
        setTimeout(function() {
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 2000);
    });
</script>