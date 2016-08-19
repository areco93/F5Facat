class Article < ApplicationRecord
 include AASM
 belongs_to :user
 has_many :comments
 has_many :has_categories
 has_many :categories, through: :has_categories

 validates :title, presence: true, uniqueness: true
 validates :body, presence: true, length: {minimum: 20}
 after_create :save_categories

 def self.publicados
 	Article.where(state: "published")
 end

 def categories=(value)
 	@categories = value
 end

 def update_visits_count
 	self.update(visits_count: self.visits_count + 1)
 end

 aasm column: "state" do
 	state :in_draft, initial: true
 	state :published

 	event :publish do
 		transitions from: :in_draft, to: :published
 	end

 	event :unpublish do
 		transitions from: :published, to: :in_draft
 	end
 end

 private
 def save_categories
 	@categories.each do |category_id|
 		HasCategory.create(category_id: category_id, article_id: self.id)
 	end
 end
end
