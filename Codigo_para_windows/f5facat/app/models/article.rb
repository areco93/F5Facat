class Article < ApplicationRecord
 belongs_to :user
 has_many :comments
 validates :title, presence: true, uniqueness: true
 validates :body, presence: true, length: {minimum: 20}

 def update_visits_count
 	self.update(visits_count: self.visits_count + 1)
 end

end
