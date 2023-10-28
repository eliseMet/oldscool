<template>
    <div class="flex gap-4 items-center" v-if="quizzes.count">
        <p class="text-bold">{{ quizzes.quizzes[currentQuizIndex].question }}</p>
        <input type="text" v-model="answer">

        <button v-if="!correctAnswer && !badAnswer" class="btn-primary" @click="validate">Send</button>
        <button v-else class="btn-secondary" @click="next">Next</button>

        <div v-if="correctAnswer" class="check">
            <div class="check-wrap">
                <span class="bg-success-500"></span>
                <span class="bg-success-500"></span>
            </div>
        </div>

        <div v-if="badAnswer" class="cross">
            <span class="bg-danger-500"></span>
            <span class="bg-danger-500"></span>
        </div>

        <p v-if="badAnswer" class="text-danger-500">C'était {{ quizzes.quizzes[currentQuizIndex].answer }}</p>
    </div>
</template>
<script>
export default {
    name: "Quiz",
    data() {
        return {
            quizzes: [],
            currentQuizIndex: 0,
            error: null,
            answer: null,
            correctAnswer: false,
            badAnswer: false,
        }
    },
    methods: {
        getQuizzes() {
            this.currentQuizzIndex = 0;
            fetch("https://quizzapi.jomoreschi.fr/api/v1/quiz?limit=5&category=tv_cinema&difficulty=facile")
                .then(response => response.json())
                .then(response => this.quizzes = response)
                .catch(error => this.error = error)
        },
        validate() {
            const user_answer = this.formatedString(this.answer);
            const quizz_answer = this.formatedString(this.quizzes.quizzes[this.currentQuizIndex].answer);

            if (user_answer == quizz_answer) this.correctAnswer = true;
            else this.badAnswer = true;
        },

        formatedString(value) {
            return value.trim().toLowerCase();
        },
        next() {
            this.answer = null;
            this.correctAnswer = false;
            this.badAnswer = false;

            if (this.currentQuizIndex < this.quizzes.count) this.currentQuizIndex++;
            else this.getQuizzes();
        }
    },
    created() {
        this.getQuizzes();
    }
}
</script>

<style scoped lang="scss">
.check,
.cross {
    position: relative;
    width: 2rem;
    // height: 2rem;

    span {
        position: absolute;
        display: block;
        height: 0.25rem;
        border-radius: 5px;
    }
}

.cross {
    span {
        width: 1.5rem;
        top: 50%;
        left: 50%;
    }

    span:first-child {
        transform: translate(-50%, -50%) rotate(45deg);
    }

    span:last-child {
        transform: translate(-50%, -50%) rotate(-45deg);
    }
}

.check {

    &-wrap {
        // background-color: red;
        width: 1.2rem;
        height: 1.2rem;
        position: absolute;
        transform: translateY(-5px) rotate(-45deg);

    }

    span:first-child {
        width: 100%;
        bottom: 0;
    }

    span:last-child {
        height: 80%;
        width: 0.25rem;
        left: 0;
        bottom: 0;
    }
}
</style>