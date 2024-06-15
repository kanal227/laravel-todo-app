<div class="modal fade" id="addGoalModal" tabindex="-1" aria-labelledby="addGoalModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addGoalModalLabel">目標の追加</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
      </div>
      <from action="{{ route('goals.store')}}"method="post">
        @csrf
        <div class="modal-body">
          <input type="submit" class="btn btn-primary">登録</button>
        </div>
      </from>
    </div>
  </div>
</div>