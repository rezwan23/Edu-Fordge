<!-- Modal -->
<div class="modal fade" id="viewQuestion" tabindex="-1" aria-labelledby="subjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="subjectModalLabel">Question</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="addQuestion">
                    <div class="form-group">
                        @foreach($quizes as $quiz)
                        <div class="question">
                            <h3>{{ $quiz->question }}</h3>
                            <ul>
                                <li>{{ $quiz->option_a }}</li>
                                <li>{{ $quiz->option_b }}</li>
                                <li>{{ $quiz->option_c }}</li>
                                <li>{{ $quiz->option_d }}</li>
                            </ul>
                            <p>Correct Answer: {{ $quiz->correct_answer }}</p>
                        </div>
                        @endforeach

                    </div>
                    {{-- <button type="button" class="btn btn-gradient-primary me-2" onclick="addQuiz()">Submit</button> --}}
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>


        </div>
    </div>
</div>