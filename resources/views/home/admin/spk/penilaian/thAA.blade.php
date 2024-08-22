<th>
    <select name="aaname" id="aaid-{{ $item->id }}" class="form-control">
        <option value="1" {{ $item->nilai == 1 ? 'selected' : '' }}>1 - Sangat
            Kurang
        </option>
        <option value="2" {{ $item->nilai == 2 ? 'selected' : '' }}>2 - Kurang
        </option>
        <option value="3" {{ $item->nilai == 3 ? 'selected' : '' }}>3 - Cukup
        </option>
        <option value="4" {{ $item->nilai == 4 ? 'selected' : '' }}>4 - Baik
        </option>
        <option value="5" {{ $item->nilai == 5 ? 'selected' : '' }}>5 - Sangat
            Baik</option>
    </select>
</th>
@push('js')
    <script>
        $(document).ready(function() {
            $('#aaid-{{ $item->id }}').on('change', function() {
                var id = "{{ $item->id }}";
                var value = $(this).val()
                $.ajax({
                    url: `penilaian/${id}/update`,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        nilai: value
                    },
                    success: function(data) {
                        toastr.success(data.message);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                })
            })
        });
    </script>
@endpush
