-- Create the database
CREATE DATABASE db_batch5_ovs ;

-- Use the created database
USE db_batch5_ovs;

-- Create users table
CREATE TABLE tbl_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

 INSERT INTO Users (fistname, lastname, email, password, role)
 VALUES
    ('firstname', 'lastname', 'email', 'password', 'role');

 -- login.php
     if ($password == $row['password']) {

-- Table: Voters
CREATE TABLE Voters (
    voter_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,  -- Store securely hashed passwords!
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: Elections
CREATE TABLE Elections (
    election_id INT PRIMARY KEY AUTO_INCREMENT,
    election_name VARCHAR(255) NOT NULL,
    description TEXT,
    start_date DATETIME NOT NULL,
    end_date DATETIME NOT NULL,
    is_active BOOLEAN DEFAULT TRUE
);

-- Table: Candidates
CREATE TABLE Candidates (
    candidate_id INT PRIMARY KEY AUTO_INCREMENT,
    election_id INT NOT NULL,
    candidate_name VARCHAR(255) NOT NULL,
    party VARCHAR(255),
    FOREIGN KEY (election_id) REFERENCES Elections(election_id)
);

-- Table: Votes
CREATE TABLE Votes (
    vote_id INT PRIMARY KEY AUTO_INCREMENT,
    voter_id INT NOT NULL,
    election_id INT NOT NULL,
    candidate_id INT NOT NULL,
    vote_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (voter_id) REFERENCES Voters(voter_id),
    FOREIGN KEY (election_id) REFERENCES Elections(election_id),
    FOREIGN KEY (candidate_id) REFERENCES Candidates(candidate_id),
    UNIQUE KEY (voter_id, election_id)  -- Prevents duplicate votes per voter per election
);


-- Example of adding an index for faster lookups:
CREATE INDEX idx_election_candidate ON Candidates (election_id, candidate_name);


