# Be sure to restart your server when you modify this file.

# Version of your assets, change this if you want to expire all your assets.
Rails.application.config.assets.version = '1.0'

# Precompile additional assets.
# application.js, application.css, and all non-JS/CSS in app/assets folder are already added.
# Rails.application.config.assets.precompile += %w( search.js )


# Bootstrap Core CSS
Rails.application.config.assets.precompile += %w( bootstrap.min.css )
Rails.application.config.assets.precompile += %w( freelancer.css )

# Fonts
Rails.application.config.assets.precompile += %w( font-awesome/css/font-awesome.min.css )
# Rails.application.config.assets.precompile += %w( fonts/glyphicons-halflings-regular.eot )
# Rails.application.config.assets.precompile += %w( fonts/glyphicons-halflings-regular.svg )
# Rails.application.config.assets.precompile += %w( fonts/glyphicons-halflings-regular.ttf )
# Rails.application.config.assets.precompile += %w( fonts/glyphicons-halflings-regular.woff )

# Javascript
Rails.application.config.assets.precompile += %w( jquery-1.10.2.js )
Rails.application.config.assets.precompile += %w( bootstrap.min.js )
Rails.application.config.assets.precompile += %w( classie.js )
Rails.application.config.assets.precompile += %w( cbpAnimatedHeader.js )
Rails.application.config.assets.precompile += %w( freelancer.js )
