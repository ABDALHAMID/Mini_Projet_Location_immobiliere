-- Create the logement table
CREATE TABLE `logement` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL, -- Add the new 'name' column
  `adresse` VARCHAR(255) NOT NULL,
  `type_logement` ENUM('apartment', 'house', 'condo', 'villa', 'townhouse', 'other') NOT NULL,
  `nombre_chambres` INT DEFAULT NULL,
  `prix` DECIMAL(10,2) NOT NULL,
  `image_path` VARCHAR(255) DEFAULT NULL,
  `description` TEXT NOT NULL,
  `status` ENUM('available', 'rented', 'unavailable') NOT NULL DEFAULT 'available',
  `area` DECIMAL(10,2) NOT NULL,
  `beds` INT NOT NULL,
  `baths` INT NOT NULL,
  `garage` INT NOT NULL, -- Assuming garage is represented by an integer (0 or 1)
  `city` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create the logement_images table
CREATE TABLE `logement_images` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `logement_id` INT NOT NULL,
  `image_path` VARCHAR(255) NOT NULL,
  FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create the logement_amenities table
CREATE TABLE `logement_amenities` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `logement_id` INT NOT NULL,
  `amenity` VARCHAR(50) NOT NULL,
  FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create the utilisateur table
CREATE TABLE `utilisateur` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `prenom` VARCHAR(50) NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `image_path` VARCHAR(255) DEFAULT NULL,
  `type` ENUM('client', 'administrator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create the location_order table
CREATE TABLE `location_order` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT DEFAULT NULL,
  `logement_id` INT DEFAULT NULL,
  `date_order` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `status` ENUM('pending', 'approved', 'rejected') NOT NULL DEFAULT 'pending',
  FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`),
  FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Sample data for utilisateur table
INSERT INTO `utilisateur` (`prenom`, `nom`, `email`, `password`, `image_path`, `type`) VALUES
('John', 'Doe', 'john.doe@example.com', '123', 'default.jpg', 'client'),
('Jane', 'Doe', 'jane.doe@example.com', '123', 'default.jpg', 'client'),
('Admin', 'User', 'admin@example.com', '123', 'default.jpg', 'administrator'),
('Client', 'User', 'client@example.com', '123', 'default.jpg', 'client');

-- Sample data for logement table
INSERT INTO `logement` (`name`, `adresse`, `type_logement`, `nombre_chambres`, `prix`, `image_path`, `description`, `status`, `area`, `beds`, `baths`, `garage`, `city`) VALUES
('Property 1', '123 Main St', 'apartment', 2, 1200.00, 'property-1.jpg', 'Description for Property 1', 'available', 100.5, 2, 1, 1, 'Casablanca'),
('Property 2', '456 Oak Ave', 'house', 3, 1800.00, 'property-2.jpg', 'Description for Property 2', 'available', 150.75, 3, 2, 0, 'Rabat'),
('Property 3', '789 Pine Rd', 'condo', 1, 900.00, 'property-3.jpg', 'Description for Property 3', 'rented', 75.25, 1, 1, 0, 'Marrakech'),
('Property 4', '101 Elm St', 'villa', 4, 2500.00, 'property-4.jpg', 'Description for Property 4', 'available', 200.00, 4, 3, 1, 'Fez'),
('Property 5', '202 Cedar Ln', 'townhouse', 2, 1500.00, 'property-5.jpg', 'Description for Property 5', 'available', 120.00, 2, 1, 0, 'Tangier'),
('Property 6', '303 Birch Blvd', 'apartment', 1, 800.00, 'property-6.jpeg', 'Description for Property 6', 'available', 90.50, 1, 1, 1, 'Agadir'),
('Property 7', '404 Maple Ave', 'house', 3, 2000.00, 'property-7.jpg', 'Description for Property 7', 'unavailable', 180.25, 3, 2, 0, 'Meknes'),
('Property 8', '505 Pine Rd', 'villa', 5, 3000.00, 'property-8.jpg', 'Description for Property 8', 'available', 250.00, 5, 4, 1, 'Oujda'),
('Property 9', '606 Cedar Ln', 'townhouse', 2, 1200.00, 'property-9.jpg', 'Description for Property 9', 'available', 100.00, 2, 1, 0, 'Essaouira'),
('Property 10', '707 Birch Blvd', 'apartment', 1, 700.00, 'property-10.jpg', 'Description for Property 10', 'available', 80.75, 1, 1, 0, 'Chefchaouen');

-- Sample data for logement_images table
INSERT INTO `logement_images` (`logement_id`, `image_path`) VALUES
(1, 'property-1.jpg'),
(1, 'property-2.jpg'),
(2, 'property-1.jpg'),
(2, 'property-2.jpg'),
(3, 'property-6.jpeg'),
(4, 'property-5.jpg'),
(5, 'property-3.jpg'),
(6, 'property-4.jpg'),
(7, 'property-10.jpg'),
(8, 'property-9.jpg'),
(9, 'property-8.jpg'),
(10, 'property-1.jpg');

-- Sample data for logement_amenities table
INSERT INTO `logement_amenities` (`logement_id`, `amenity`) VALUES
(1, 'Wifi'),
(1, 'Parking'),
(2, 'Garden'),
(3, 'Swimming Pool'),
(4, 'Balcony'),
(5, 'Air Conditioning'),
(6, 'Pet Friendly'),
(7, 'Fireplace'),
(8, 'Security System'),
(9, 'Fitness Center'),
(10, 'Laundry Room');

-- Sample data for location_order table
INSERT INTO `location_order` (`user_id`, `logement_id`, `status`) VALUES
(1, 1, 'approved'),
(2, 3, 'pending'),
(3, 5, 'rejected'),
(4, 8, 'approved'),
(1, 10, 'pending');

