<?php


namespace App\Services\Behavioral\Observer;


use App\Contracts\Behavioral\Observer\Subject;
use App\Contracts\Behavioral\Observer\Observer;

class NewsAgency implements Subject
{
    private $observers = [];
    private $news;

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function setNews($news) {
        $this->news = $news;
        $this->notifyObservers();
    }

    public function getNews() {
        return $this->news;
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->getNews());
        }
    }
}
