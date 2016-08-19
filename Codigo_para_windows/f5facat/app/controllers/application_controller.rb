class ApplicationController < ActionController::Base
  before_action :authenticate_user!
  before_action :set_categories	
  protect_from_forgery with: :exception

  protected

	def authenticate_editor!
		redirect_to root_path unless user_signed_in? && current_user.is_editor?
	end

	def authenticate_admin!
		redirect_to root_path unless user_signed_in? && current_user.is_admin?
	end

  private
  	def set_categories
  		@categories = Category.all
  	end
end
